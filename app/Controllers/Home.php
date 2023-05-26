<?php

namespace App\Controllers;

use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\ProfileLembagaModel;
use Config\Services;

class Home extends BaseController
{
    protected $request;
    protected $lembagaModel;
    protected $jenjangModel;
    protected $penghasilanModel;
    protected $kompetensiModel;
    protected $pekerjaanModel;
    public function __construct()
    {
        $this->request = Services::request();
        $this->lembagaModel = new ProfileLembagaModel();

        $this->pendidikanModel = new PendidikanModel();
        $this->jenjangModel = new JenjangModel();
        $this->penghasilanModel = new PenghasilanModel();
        $this->kompetensiModel = new KompetensiModel();
        $this->pekerjaanModel = new PekerjaanModel();
    }
    public function index()
    {
        $data = [
            'title' =>  'Selamat Datang',
            'lembaga' => $this->lembagaModel->find(1),
        ];
        return view('home/index',$data);
    }

    public function daftar(){
        $data=[
            'title' => 'Daftar',
            'lembaga' => $this->lembagaModel->find(1),
            'jenjang' => $this->jenjangModel->findAll(),
            'penghasilan' => $this->penghasilanModel->findAll(),
            'kompetensi' => $this->kompetensiModel->findAll(),
            'pekerjaan' => $this->pekerjaanModel->findAll(),
            'pendidikan' => $this->pendidikanModel->findAll(),
            ];
        return view('home/daftar', $data);
    }

    public function saveDaftar(){
        // Ambil data yang dikirim melalui AJAX
        $nama = $this->request->getVar('syarat_ketentuan');
        // Ambil data lainnya sesuai dengan form Anda

        // Proses data dan simpan ke database atau lakukan tindakan lainnya
        // ...
        // Kirim respon ke JavaScript
        return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil disimpan.'. $nama]);

    }

    public function tables(){
        $data=['title' => 'Tables'];
        return view('tables', $data);
    }

    public function helpers(){
        $data=['title' => 'Helpers'];
        return view('helpers/index', $data);
    }
}
