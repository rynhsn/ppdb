<?php

namespace App\Controllers;

use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\SiswaModel;
use App\Models\StatusPpdbModel;
use Config\Services;
use App\Entities\User;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $request;
    protected JenjangModel $jenjangModel;
    protected PendidikanModel $pendidikanModel;
    protected PenghasilanModel $penghasilanModel;
    protected KompetensiModel $kompetensiModel;
    protected PekerjaanModel $pekerjaanModel;
    protected SiswaModel $siswaModel;
    protected UserModel $userModel;
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
        $statusModel = new StatusPpdbModel();
        $data = [
            'title' => 'Selamat Datang',
            'lembaga' => $this->lembaga,
            'status' => $statusModel->first(),
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

        $file_surat_kelulusan = $this->request->getFile('file_surat_kelulusan');
        //generate nama sampul random
        $nama_file_surat_kelulusan = $file_surat_kelulusan->getRandomName();
        //pindahkan file ke folder img
        $file_surat_kelulusan->move('uploads/sk', $nama_file_surat_kelulusan);

        $file_kk = $this->request->getFile('file_kk');
        //generate nama sampul random
        $nama_file_kk = $file_kk->getRandomName();
        //pindahkan file ke folder img
        $file_kk->move('uploads/kk', $nama_file_kk);

        $file_ktp_ayah = $this->request->getFile('file_ktp_ayah');
        //generate nama sampul random
        $nama_file_ktp_ayah = $file_ktp_ayah->getRandomName();
        //pindahkan file ke folder img
        $file_ktp_ayah->move('uploads/ktp_ayah', $nama_file_ktp_ayah);

        $file_ktp_ibu = $this->request->getFile('file_ktp_ibu');
        //generate nama sampul random
        $nama_file_ktp_ibu = $file_ktp_ibu->getRandomName();
        //pindahkan file ke folder img
        $file_ktp_ibu->move('uploads/ktp_ibu', $nama_file_ktp_ibu);

        $file_akta = $this->request->getFile('file_akta');
        //generate nama sampul random
        $nama_file_akta = $file_akta->getRandomName();
        //pindahkan file ke folder img
        $file_akta->move('uploads/akta', $nama_file_akta);

        $file_foto = $this->request->getFile('file_foto');
        //generate nama sampul random
        $nama_file_foto = $file_foto->getRandomName();
        //pindahkan file ke folder img
        $file_foto->move('uploads/foto', $nama_file_foto);



        $file_ijazah = $this->request->getFile('file_ijazah');
        //cek apakah tidak ada gambar yang diupload
        if ($file_ijazah->getError() == 4) {
            $nama_file_ijazah = 'default.jpg';
        } else {
            //generate nama sampul random
            $nama_file_ijazah = $file_ijazah->getRandomName();
            //pindahkan file ke folder img
            $file_ijazah->move('uploads/ijazah', $nama_file_ijazah);
        }

        $file_kip = $this->request->getFile('file_kip');
        //cek apakah tidak ada gambar yang diupload
        if ($file_kip->getError() == 4) {
            $nama_file_kip = 'default.jpg';
        } else {
            //generate nama sampul random
            $nama_file_kip = $file_kip->getRandomName();
            //pindahkan file ke folder img
            $file_kip->move('uploads/kip', $nama_file_kip);
        }

        $data = array(
            'no_pendaftaran' => $no_pendaftaran,
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'nisn' => $this->request->getVar('nisn'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'agama' => $this->request->getVar('agama'),

            'alamat_siswa' => $this->request->getVar('alamat'),
            'jenis_tinggal' => $this->request->getVar('jenis_tinggal'),
            'desa' => $this->request->getVar('desa'),
            'kec' => $this->request->getVar('kecamatan'),
            'kab' => $this->request->getVar('kabupaten'),
            'prov' => $this->request->getVar('provinsi'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'no_hp_ortu' => $this->request->getVar('no_telp'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'lokasi_sekolah' => $this->request->getVar('lokasi_sekolah'),
            'no_un' => $this->request->getVar('no_un'),
            'no_seri_ijazah' => $this->request->getVar('no_seri_ijazah'),
            'no_seri_skhun' => $this->request->getVar('no_seri_skhun'),
            'sttb_lulus' => $this->request->getVar('sttb_lulus'),

            'file_surat_kelulusan' => $nama_file_surat_kelulusan,
            'file_kk' => $nama_file_kk,
            'file_ktp_ayah' => $nama_file_ktp_ayah,
            'file_ktp_ibu' => $nama_file_ktp_ibu,
            'file_akta' => $nama_file_akta,
            'file_foto' => $nama_file_foto,
            'file_ijazah' => $nama_file_ijazah,
            'file_kip' => $nama_file_kip,

            'jenjang_daftar' => $this->request->getVar('jenjang'),
            'tgl_siswa' => date('Y-m-d H:i:s'),
            'status_verifikasi' => '0',
            'status_pendaftaran' => '0',
        );

        $this->siswaModel->save($data);


        $data = [
            'fullname' => $data['nama_lengkap'],
            'username' => $data['no_pendaftaran'],
            'password' => $data['nisn'],
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
        $tahun = date('Y');
        $no_pendaftaran = 'PD-' . $tahun . '0001';
        $cek = $this->siswaModel->where(['no_pendaftaran' => $no_pendaftaran])->first();
        if ($cek) {
            $last_no_pendaftaran = $this->siswaModel->select('no_pendaftaran')->orderBy('no_pendaftaran', 'DESC')->first();
            $last_no_pendaftaran = (int)substr($last_no_pendaftaran['no_pendaftaran'], -4);
            $no_pendaftaran = $last_no_pendaftaran + 1;
            $no_pendaftaran = 'PD-' . $tahun . str_pad($no_pendaftaran, 4, "0", STR_PAD_LEFT);
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
        $this->userModel->withGroup('siswa')->skipValidation(true)->protect(false)->save($user);
    }
}
