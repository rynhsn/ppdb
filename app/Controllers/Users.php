<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use Config\Database;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class Users extends BaseController
{
    protected $request;
    protected $userModel;
    protected $groupModel;
    protected $db;

    public function __construct()
    {
        $this->request = Services::request();
        $this->db = Database::connect();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
    }

    public function index()
    {
        $data = [
            'title' => 'User Management',
            'users' => $this->_getUser(),
        ];
        return view('user/index', $data);
    }

    //create
    public function create()
    {
        $data = [
            'title' => 'Add User',
            'validation' => \Config\Services::validation(),
            'groups' => $this->groupModel->findAll(),
        ];
        return view('user/create', $data);
    }

    //save
    public function save()
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'valid_email' => 'Format {field} tidak sesuai.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} minimal 8 karakter.'
                ]
            ],
            'password_confirm' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'matches' => '{field} tidak sesuai dengan password.'
                ]
            ],
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'active' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'group' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/panel/user/create')->withInput();
        }
        $groupName = $this->request->getVar('group');
        $active = $this->request->getVar('active') == 'on' ? 1 : 0;
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
//            'fullname' => $this->request->getVar('fullname'),
//            'active' => $active,
        ];
//        $group = $this->groupModel->where('name', $groupName)->first();
        $this->userModel->withGroup($groupName)->insert($data);
        session()->setFlashdata('pesan', 'User berhasil ditambahkan.');
        return redirect()->to('/panel/user');
    }

    //delete
    public function delete($id = null)
    {
        $u = $this->userModel->where('username', $id)->first()->id;
        if ($this->userModel->delete($u)) {
            session()->setFlashdata('pesan', 'User berhasil dihapus.');
            return redirect()->to('/panel/user');
        } else {
            session()->setFlashdata('pesan', 'User gagal dihapus.');
            return redirect()->to('/panel/user');
        }
    }

    private function _getUser($id = null, $where = null)
    {
        $query = $this->db->table('users as u')
            ->select('u.*, u.fullname, u.active, ag.name as group_name')
            ->join('auth_groups_users as agu', 'agu.user_id = u.id')
            ->join('auth_groups as ag', 'ag.id = agu.group_id')
            ->where('u.deleted_at', null);
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
}
