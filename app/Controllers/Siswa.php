<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\UserModel;
use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use Myth\Auth\Models\GroupModel;

class Siswa extends BaseController
{
    private $siswaModel;
    private $userModel;
    private $groupModel;
    protected $jenjangModel;
    protected $penghasilanModel;
    protected $kompetensiModel;
    protected $pekerjaanModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->jenjangModel = new JenjangModel();
        $this->penghasilanModel = new PenghasilanModel();
        $this->kompetensiModel = new KompetensiModel();
        $this->pekerjaanModel = new PekerjaanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Calon Siswa',
            'siswa' => $this->siswaModel->findAll(),
            'lembaga' => $this->lembaga,
        ];
        return view('siswa/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Calon Siswa',
            'siswa' => $this->siswaModel->find($id),
            'lembaga' => $this->lembaga,
            'jenjang' => $this->jenjangModel->findAll(),
            'penghasilan' => $this->penghasilanModel->findAll(),
            'kompetensi' => $this->kompetensiModel->findAll(),
            'pekerjaan' => $this->pekerjaanModel->findAll(),
            'pendidikan' => $this->pendidikanModel->findAll(),
        ];
        return view('siswa/detail', $data);
    }

    public function update($id)
    {
        $this->siswaModel->save($this->request->getVar());
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/panel/calon-siswa/edit/' . $id);
    }

    public function delete($id)
    {
        $siswa = $this->siswaModel->find($id);
        $user = $this->userModel->where('username', $siswa['no_pendaftaran'])->first();
        //hapus dari users juga
//        $this->groupModel->removeUserFromAllGroups($user->id);
//        $this->userModel->delete($user->id);
        //hapus dari siswa

        //hapus file
        if ($siswa['file_foto'] != 'default.jpg') {
            unlink('uploads/foto/' . $siswa['file_foto']);
        }
        if ($siswa['file_surat_kelulusan'] != 'default.jpg') {
            unlink('uploads/sk/' . $siswa['file_surat_kelulusan']);
        }
        if ($siswa['file_ijazah'] != 'default.jpg') {
            unlink('uploads/ijazah/' . $siswa['file_ijazah']);
        }
        if ($siswa['file_ktp_ayah'] != 'default.jpg') {
            unlink('uploads/ktp_ayah/' . $siswa['file_ktp_ayah']);
        }
        if ($siswa['file_ktp_ibu'] != 'default.jpg') {
            unlink('uploads/ktp_ibu/' . $siswa['file_ktp_ibu']);
        }
        if ($siswa['file_kk'] != 'default.jpg') {
            unlink('uploads/kk/' . $siswa['file_kk']);
        }
        if ($siswa['file_akta'] != 'default.jpg') {
            unlink('uploads/akta/' . $siswa['file_akta']);
        }
        if ($siswa['file_kip'] != 'default.jpg') {
            unlink('uploads/kip/' . $siswa['file_kip']);
        }

        $this->siswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/panel/calon-siswa');
    }
}
