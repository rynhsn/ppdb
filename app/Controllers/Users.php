<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use Config\Database;
use App\Entities\User;
use App\Models\UserModel;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\PermissionModel;
use Myth\Auth\Password;

class Users extends BaseController
{
    protected $request;
    protected $userModel;
    protected $groupModel;
    protected $db;
    protected $config;
    protected $permissionModel;

    public function __construct()
    {
        $this->request = Services::request();
        $this->db = Database::connect();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
        $this->permissionModel = new PermissionModel();
        $this->config = config('Auth');
    }

    public function index()
    {
        $data = [
            'title' => 'User Management',
            'users' => $this->_getUser(),
            'groups' => $this->groupModel->findAll(),
            'lembaga' => $this->lembaga,
        ];
        return view('user/index', $data);
    }

    //create
    public function create()
    {
        $data = [
            'title' => 'Add User',
            'validation' => Services::validation(),
            'groups' => $this->groupModel->findAll(),
            'lembaga' => $this->lembaga,
        ];
        return view('user/create', $data);
    }

    //save
    public function save()
    {
        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
            'fullname' => 'required|alpha_space|min_length[3]|max_length[30]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
        $user = new User($this->request->getPost($allowedPostFields));
        $user->activate();

        if (!$this->userModel->withGroup($this->request->getVar('group'))->save($user)) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        $user = $this->userModel->where('username', $this->request->getVar('username'))->first();
        $permission = $this->permissionModel->where('name', 'manage-profile')->first();
        $this->permissionModel->addPermissionToUser($permission->id, $user->id);
        // Success!
        session()->setFlashdata('pesan', 'Pengguna baru telah ditambahkan.');
        return redirect()->to('/panel/user');
    }

    //edit
    public function edit($username)
    {
        $data = [
            'title' => 'Edit User',
            'validation' => Services::validation(),
            'user' => $this->userModel->where('username', $username)->first(),
            'lembaga' => $this->lembaga,
        ];
        return view('user/edit', $data);
    }

    public function update()
    {
        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]',
            'email' => 'required|valid_email',
            'fullname' => 'required|alpha_space|min_length[3]|max_length[30]',
        ];

        if ($this->request->getVar('username') != $this->request->getVar('usernameLama')) {
            $rules['username'] .= '|is_unique[users.username]';
        }
        if ($this->request->getVar('email') != $this->request->getVar('emailLama')) {
            $rules['email'] .= '|is_unique[users.email]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $allowedPostFields = array_merge(['id'], $this->config->validFields, $this->config->personalFields);
        $user = new User($this->request->getPost($allowedPostFields));

        $user->activate();

        if (!$this->userModel->skipValidation()->save($user)) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        // Success!
        session()->setFlashdata('pesan', 'Akun pengguna telah diperbarui.');
        if (has_permission('manage-accounts')) {
            return redirect()->to('/panel/user');
        }
        return redirect()->back();
    }


    public function reset()
    {
        $id = $this->request->getVar('id');
        $rules = [
            'password' => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'password_hash' => Password::hash($this->request->getVar('password')),
            'reset_hash' => null,
            'reset_at' => null,
            'reset_expires' => null,
        ];
        $this->userModel->update($id, $data);

        session()->setFlashdata('pesan', 'Password telah direset.');
        return redirect()->back();
    }

    //update user group
    function changeGroup($id)
    {
        $user = $this->userModel->find($id);
        $group = $this->request->getVar('group');
        if ($user) {
            $this->groupModel->removeUserFromAllGroups($id);
            $this->groupModel->addUserToGroup($id, $group);

            session()->setFlashdata('pesan', 'User group telah diperbarui.');
        } else {
            session()->setFlashdata('pesan', 'Pengguna tidak ditemukan.');
        }

        return redirect()->to('/panel/user');
    }


    public function setActive()
    {
        $id = $this->request->getVar('id');
        $active = $this->request->getVar('active');
        $user = $this->userModel->find($id);
        $user->setActive($active);
        $this->userModel->save($user);
        session()->setFlashdata('pesan', 'Akses telah diperbarui.');
        return redirect()->to('/panel/user');
    }

    function delete($id = null)
    {
        $u = $this->userModel->where('username', $id)->first()->id;
        $this->groupModel->removeUserFromAllGroups($u);
        $this->userModel->delete($u);
        session()->setFlashdata('pesan', 'User berhasil dihapus.');
        return redirect()->to('/panel/user');
    }

    function _getUser($id = null, $where = null)
    {
        $query = $this->db->table('users as u')
            ->select('u.*, u.fullname, u.active, ag.name as group_name')
            ->join('auth_groups_users as agu', 'agu.user_id = u.id')
            ->join('auth_groups as ag', 'ag.id = agu.group_id')
            ->where('u.deleted_at', null)
            ->where('u.id !=', user_id());
        if ($id != null) {
            $query = $query->getwhere(['u.id' => $id]);
            $results = $query->getRow();
        } elseif ($where != null) {
            $query = $query->getwhere($where);
            $results = $query->getResult();
        } else {
            $query = $query->get();
            $results = $query->getResult();
        }
        return $results;
    }

    public function accountSettings()
    {
        $data = [
            'title' => 'Account Settings',
            'validation' => Services::validation(),
            'user' => $this->userModel->find(user_id()),
            'lembaga' => $this->lembaga,
        ];
        return view('user/edit', $data);
    }
}
