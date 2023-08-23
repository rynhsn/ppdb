<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KeteranganBuktiModel;
use App\Models\SiswaModel;

class HasilSeleksi extends BaseController
{
    protected SiswaModel $siswaModel;
    protected KeteranganBuktiModel $keteranganBuktiModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->keteranganBuktiModel = new KeteranganBuktiModel();
    }

    public function index($jenjang)
    {
        $jenjang = JENJANG[$jenjang];
        $data = [
            'title' => 'Hasil Seleksi',
            'lembaga' => $this->lembaga,
            'siswa' => $this->siswaModel->where('status_pendaftaran', '2')->where('jenjang_daftar', $jenjang)->findAll(),
            'catatan' => $this->keteranganBuktiModel->where('jenjang', $jenjang)->first(),
            'jenjang' => $jenjang
        ];

        return view('/panel/hasil-seleksi', $data);
    }

    public function save()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'nilai' => $this->request->getVar('nilai'),
            'status_kelulusan' => ($this->request->getVar('nilai') >= NILAI_MIN) ? 1 : 2
        ];
//        if ($data['status_kelulusan'] == 2) {
//            $data['status_verifikasi'] = 2;
//        }
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Nilai berhasil disimpan.');
        return redirect()->back();
    }

    public function terima($id)
    {
        $data = [
            'id' => $id,
            'status_verifikasi' => 1
        ];
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Siswa berhasil diterima.');
        return redirect()->back();
    }

    public function tolak($id)
    {
        $data = [
            'id' => $id,
            'status_verifikasi' => 2
        ];
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Siswa ditolak.');
        return redirect()->back();
    }

    public function updateCatatan($jenjang)
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'isi' => $this->request->getVar('isi'),
        ];
        $this->keteranganBuktiModel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->back();
    }
}
