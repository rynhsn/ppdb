<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class ValidasiRegistrasi extends BaseController
{

    protected $siswaModel;
    protected $userModel;
    protected $groupModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
    }
    public function index()
    {
        $data= [
            'title' => 'Validasi Registrasi',
            'lembaga' => $this->lembaga,
            'siswa' => $this->siswaModel->select('siswa.id, no_pendaftaran, jenjang_daftar, status_pendaftaran, tanggal')->join('pembayaran', 'pembayaran.siswa_id = siswa.id', 'left')->findAll(),
        ];
//        dd($data['siswa']);
        return view('panel/validasi-registrasi', $data);
    }
}
