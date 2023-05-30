<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\SiswaModel;
use App\Models\StatusPpdbModel;

class Panel extends BaseController
{
    protected $siswaModel;
    private $statusModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->jenjangModel = new JenjangModel();
        $this->penghasilanModel = new PenghasilanModel();
        $this->kompetensiModel = new KompetensiModel();
        $this->pekerjaanModel = new PekerjaanModel();
        $this->statusModel = new StatusPpdbModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'lembaga' => $this->lembaga,
            'status' => $this->statusModel->first(),
        ];
        if (in_groups('siswa')) {
            $data += [
                'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
            ];
            if ($data['siswa']['status_pendaftaran'] != 2) {
                return view('panel/index-siswa-belum-bayar', $data);
            }
            return view('panel/index-siswa', $data);
        }
        return view('panel/index', $data);
    }

    public function profile(){
        $data = [
            'title' => 'Profile',
            'lembaga' => $this->lembaga,
            'jenjang' => $this->jenjangModel->findAll(),
            'penghasilan' => $this->penghasilanModel->findAll(),
            'kompetensi' => $this->kompetensiModel->findAll(),
            'pekerjaan' => $this->pekerjaanModel->findAll(),
            'pendidikan' => $this->pendidikanModel->findAll(),
            'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
        ];
        return view('panel/profile', $data);
    }
}
