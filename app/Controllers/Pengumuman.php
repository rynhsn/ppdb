<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;
use CodeIgniter\I18n\Time;
use Config\Services;

class Pengumuman extends BaseController
{
    protected $pengumumanModel;
    protected $request;
    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
        $this->request = Services::request();
    }
    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $this->pengumumanModel->orderBy('id', 'DESC')->findAll(),
            'lembaga' => $this->lembaga,
        ];
        if (has_permission('akses-fitur-siswa')){
            return view('siswa/pengumuman', $data);
        }
        return view('panel/pengumuman', $data);
    }

    public function save($id = null)
    {
        $data = [
            'judul_pengumuman' => $this->request->getVar('judul_pengumuman'),
            'ket_pengumuman' => $this->request->getVar('ket_pengumuman'),
            'tgl_pengumuman' => Time::now('Asia/Jakarta', 'id_ID')
        ];
        if ($id){
            $data['id'] = $id;
        }
        $this->pengumumanModel->save($data);

        session()->setFlashdata('pesan', 'Pengumuman berhasil di'.$id ? 'ubah' : 'tambahkan');
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->pengumumanModel->delete($id);
        session()->setFlashdata('pesan', 'Pengumuman berhasil dihapus.');
        return redirect()->back();
    }
}
