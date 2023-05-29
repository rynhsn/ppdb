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
        $data = [
            'id' => $id,
            'jenjang_daftar' => $this->request->getVar('jenjang_daftar'),

            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nisn' => $this->request->getVar('nisn'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'jml_saudara' => $this->request->getVar('jml_saudara'),
            'no_hp_siswa' => $this->request->getVar('no_hp_siswa'),

            'alamat_siswa' => $this->request->getVar('alamat_siswa'),
            'jenis_tinggal' => $this->request->getVar('jenis_tinggal'),
            'desa' => $this->request->getVar('desa'),
            'kec' => $this->request->getVar('kec'),
            'kab' => $this->request->getVar('kab'),
            'prov' => $this->request->getVar('prov'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'jarak' => $this->request->getVar('jarak'),
            'trans' => $this->request->getVar('trans'),


            'no_kk' => $this->request->getVar('no_kk'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'pdd_ayah' => $this->request->getVar('pdd_ayah'),
            'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'),
            'status_ayah' => $this->request->getVar('status_ayah'),
            'th_lahir_ayah' => $this->request->getVar('th_lahir_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'pdd_ibu' => $this->request->getVar('pdd_ibu'),
            'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'),
            'status_ibu' => $this->request->getVar('status_ibu'),
            'th_lahir_ibu' => $this->request->getVar('th_lahir_ibu'),
            'nama_wali' => $this->request->getVar('nama_wali'),
            'nik_wali' => $this->request->getVar('nik_wali'),
            'pdd_wali' => $this->request->getVar('pdd_wali'),
            'pekerjaan_wali' => $this->request->getVar('pekerjaan_wali'),
            'penghasilan_wali' => $this->request->getVar('penghasilan_wali'),
            'th_lahir_wali' => $this->request->getVar('th_lahir_wali'),
            'no_hp_ortu' => $this->request->getVar('no_hp_ortu'),

            'npsn_sekolah' => $this->request->getVar('npsn_sekolah'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'lokasi_sekolah' => $this->request->getVar('lokasi_sekolah'),
            'no_kks' => $this->request->getVar('no_kks'),
            'no_pkh' => $this->request->getVar('no_pkh'),
            'no_kip' => $this->request->getVar('no_kip'),
        ];
        $this->siswaModel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/panel/calon-siswa/edit/' . $id);
    }

    public function delete($id)
    {
        $siswa = $this->siswaModel->find($id);
        $user = $this->userModel->where('username', $siswa['no_pendaftaran'])->first();
        //hapus dari users juga
        $this->groupModel->removeUserFromAllGroups($user->id);
        $this->userModel->delete($user->id);
        //hapus dari siswa
        $this->siswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/panel/calon-siswa');
    }
}
