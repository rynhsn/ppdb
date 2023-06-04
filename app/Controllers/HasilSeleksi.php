<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class HasilSeleksi extends BaseController
{
    protected $siswaModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function index($jenjang)
    {
        $jenjang = JENJANG[$jenjang];
        $data = [
            'title'     => 'Hasil Seleksi',
            'lembaga'   => $this->lembaga,
            'siswa'     => $this->siswaModel->where('status_pendaftaran', '2')->where('jenjang_daftar', $jenjang)->findAll(),
        ];

        return view('/panel/hasil-seleksi', $data);
    }

    public function save(){
        $data = [
          'id'      => $this->request->getVar('id'),
          'nilai'   => $this->request->getVar('nilai'),
        ];
//        dd($data);
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Nilai berhasil disimpan.');
        return redirect()->back();
    }
}
