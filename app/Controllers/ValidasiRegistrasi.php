<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\SiswaModel;
use App\Models\UserModel;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\PermissionModel;

class ValidasiRegistrasi extends BaseController
{

    protected $siswaModel;
    protected $userModel;
    protected $groupModel;
    protected $pembayaranModel;
    protected $permissionModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
        $this->permissionModel = new PermissionModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Validasi Registrasi',
            'lembaga' => $this->lembaga,
            'siswa' => $this->siswaModel->select('siswa.id as uid, no_pendaftaran, jenjang_daftar, status_pendaftaran, tanggal, dari, ke, jumlah, nama_lengkap, nik, nisn, bukti')->join('pembayaran', 'pembayaran.siswa_id = siswa.id', 'left')->findAll(),
        ];
//        dd($data['siswa']);
        return view('panel/validasi-registrasi', $data);
    }

    public function konfirmasi()
    {
        $data = [
            'id' => $this->request->getVar('uid'),
            'status_pendaftaran' => 2,
        ];

        $user=$this->userModel->where('username', $this->siswaModel->find($data['id'])['no_pendaftaran'])->first();
        $permission = $this->permissionModel->where('name', 'akses-fitur-siswa')->first();

        $this->permissionModel->addPermissionToUser($permission->id, $user->id);
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil dikonfirmasi.');
        return redirect()->to('/panel/validasi-registrasi');
    }

    public function tolak()
    {
        $data = [
            'id' => $this->request->getVar('uid'),
            'status_pendaftaran' => 3,
        ];
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Data registrasi ditolak.');
        return redirect()->to('/panel/validasi-registrasi');
    }
}
