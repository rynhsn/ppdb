<?php

namespace App\Controllers;

use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\SiswaModel;
use Config\Services;
use App\Entities\User;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $request;
    protected $jenjangModel;
    protected $penghasilanModel;
    protected $kompetensiModel;
    protected $pekerjaanModel;
    protected $siswaModel;
    protected $userModel;
    protected $config;

    public function __construct()
    {
        $this->request = Services::request();
        $this->pendidikanModel = new PendidikanModel();
        $this->jenjangModel = new JenjangModel();
        $this->penghasilanModel = new PenghasilanModel();
        $this->kompetensiModel = new KompetensiModel();
        $this->pekerjaanModel = new PekerjaanModel();
        $this->siswaModel = new SiswaModel();
        $this->userModel = new UserModel();
        $this->config = config('Auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Selamat Datang',
            'lembaga' => $this->lembaga,
        ];
        return view('home/index', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar',
            'lembaga' => $this->lembaga,
            'jenjang' => $this->jenjangModel->findAll(),
            'penghasilan' => $this->penghasilanModel->findAll(),
            'kompetensi' => $this->kompetensiModel->findAll(),
            'pekerjaan' => $this->pekerjaanModel->findAll(),
            'pendidikan' => $this->pendidikanModel->findAll(),
        ];
        return view('home/daftar', $data);
    }

    public function saveDaftar()
    {
        // Ambil data yang dikirim melalui AJAX
        $exist = $this->_cekNik($this->request->getVar('nik'));
        if ($exist) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'NIK sudah terdaftar.',
            ]);
        }

        $no_pendaftaran = $this->_generateNoPendaftaran();

        $data = array(
            'no_pendaftaran' => $no_pendaftaran,
            'jenjang_daftar' => $this->request->getVar('jenjang'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nisn' => $this->request->getVar('nisn'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),
            'anak_ke' => $this->request->getVar('anak_ke'),
            'jml_saudara' => $this->request->getVar('jml_saudara'),
            'no_hp_siswa' => $this->request->getVar('no_telp'),

            'alamat_siswa' => $this->request->getVar('alamat'),
            'jenis_tinggal' => $this->request->getVar('jenis_tinggal'),
            'desa' => $this->request->getVar('desa'),
            'kec' => $this->request->getVar('kecamatan'),
            'kab' => $this->request->getVar('kabupaten'),
            'prov' => $this->request->getVar('provinsi'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'jarak' => $this->request->getVar('jarak'),
            'trans' => $this->request->getVar('kendaraan'),

            'no_kk' => $this->request->getVar('no_kk'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
            'pdd_ayah' => $this->request->getVar('pdd_ayah'),
            'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'),
            'status_ayah' => $this->request->getVar('status_hidup_ayah'),
            'th_lahir_ayah' => $this->request->getVar('th_lahir_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
            'pdd_ibu' => $this->request->getVar('pdd_ibu'),
            'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'),
            'status_ibu' => $this->request->getVar('status_hidup_ibu'),
            'th_lahir_ibu' => $this->request->getVar('th_lahir_ibu'),
            'nama_wali' => $this->request->getVar('nama_wali'),
            'nik_wali' => $this->request->getVar('nik_wali'),
            'pdd_wali' => $this->request->getVar('pdd_wali'),
            'pekerjaan_wali' => $this->request->getVar('pekerjaan_wali'),
            'penghasilan_wali' => $this->request->getVar('penghasilan_wali'),
            'th_lahir_wali' => $this->request->getVar('th_lahir_wali'),
            'no_hp_ortu' => $this->request->getVar('no_telp_ot'),
            'npsn_sekolah' => $this->request->getVar('npsn'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'lokasi_sekolah' => $this->request->getVar('lokasi_sekolah'),
            'no_kks' => $this->request->getVar('kks'),
            'no_pkh' => $this->request->getVar('pkh'),
            'no_kip' => $this->request->getVar('kip'),
            'status_verifikasi' => '0',
            'status_pendaftaran' => '0',
        );

        $this->siswaModel->save($data);


        $data = [
            'fullname' => $data['nama_lengkap'],
            'username' => $data['no_pendaftaran'],
            'password' => $data['nik'],
            'email' => $data['no_pendaftaran'] . '@gmail.com',
        ];

        $this->_save($data);

        // Kirim respon ke JavaScript
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Data berhasil disimpan.',
            'data' => $data
        ]);
    }

    private function _generateNoPendaftaran()
    {

        //ambil no_pendaftaran terakhir dari tabel siswa di database
        $tahun = date('Y');
        //format $no_pendaftaran = PD-tahun0001
        $no_pendaftaran = 'PD-' . $tahun . '0001';
        //cek apakah no_pendaftaran sudah ada di database
        $cek = $this->siswaModel->where(['no_pendaftaran' => $no_pendaftaran])->first();
        if ($cek) {
            //jika no_pendaftaran sudah ada, maka ambil no_pendaftaran terakhir
            $last_no_pendaftaran = $this->siswaModel->select('no_pendaftaran')->orderBy('no_pendaftaran', 'DESC')->first();
            //ambil 4 digit terakhir dari no_pendaftaran terakhir
            $last_no_pendaftaran = substr($last_no_pendaftaran['no_pendaftaran'], -4);
            //tambahkan 1
            $no_pendaftaran = $last_no_pendaftaran + 1;
            //format nomor baru
            $no_pendaftaran = 'PD-' . $tahun . $no_pendaftaran.str_pad($no_pendaftaran, 4, "0", STR_PAD_LEFT);
        }

        return $no_pendaftaran;
    }

    private function _cekNik($nik)
    {
        $cek = $this->siswaModel->where(['nik' => $nik])->first();
        if ($cek) {
            return true;
        }
        return false;
    }

    private function _save($data)
    {
        $user = new User($data);
        $user->activate();
        $this->userModel->withGroup('siswa')->save($user);
    }
}
