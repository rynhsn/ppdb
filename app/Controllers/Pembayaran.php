<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PembayaranModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\SiswaModel;
use Config\Services;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;
    protected $siswaModel;
    protected $request;

    public function __construct()
    {
        $this->request = Services::request();
        $this->pembayaranModel = new PembayaranModel();
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'lembaga' => $this->lembaga,
            'validation' => Services::validation(),
            'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
        ];
//        dd($data['validation']);
        return view('pembayaran/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'bukti' => [
                'rules' => 'max_size[bukti,1024]|is_image[bukti]|mime_in[bukti,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar.',
                    'is_image' => 'Yang anda pilih bukan gambar.',
                    'mime_in' => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi.'
                ]
            ],
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        //ambil gambar
        $bukti = $this->request->getFile('bukti');
        //generate nama sampul random
        $namaFile = $bukti->getRandomName();
        //pindahkan file ke folder img
        $bukti->move('img/pembayaran', $namaFile);

        $data = [
            'siswa_id' => $this->request->getVar('id'),
            'dari' => $this->request->getVar('dari'),
            'ke' => $this->request->getVar('ke'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jumlah' => $this->request->getVar('jumlah'),
            'bukti' => $namaFile,
        ];

        $id_siswa = $this->request->getVar('id');
        $pembayaran = $this->pembayaranModel->where('siswa_id', $id_siswa)->first();
        if($pembayaran){
            unlink('img/pembayaran/' . $pembayaran['bukti']);
            $data += ['id' => $pembayaran['id']];
        }
        $this->pembayaranModel->save($data);

        $data = [
            'id' => $this->request->getVar('id'),
            'status_pendaftaran' => 1,
        ];
        $this->siswaModel->save($data);

        session()->setFlashdata('pesan', 'Mohon tunggu, kami akan konfirmasi segera.');
        return redirect()->to('/panel');
    }
}
