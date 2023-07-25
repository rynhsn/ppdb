<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Models\JadwalModel;
use App\Models\JenjangModel;
use App\Models\KeteranganBuktiModel;
use App\Models\KompetensiModel;
use App\Models\MateriModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\PengumumanModel;
use App\Models\SiswaModel;
use App\Models\StatusPpdbModel;
use CodeIgniter\I18n\Time;
use Config\Services;
use Dompdf\Dompdf;
use Dompdf\Options;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

class Panel extends BaseController
{
    protected SiswaModel $siswaModel;
    private StatusPpdbModel $statusModel;
    protected PengumumanModel $pengumumanModel;
    protected PendidikanModel $pendidikanModel;
    protected JenjangModel $jenjangModel;
    protected PenghasilanModel $penghasilanModel;
    protected KompetensiModel $kompetensiModel;
    protected PekerjaanModel $pekerjaanModel;
    protected MateriModel $materiModel;
    protected JadwalModel $jadwalModel;
    protected UserModel $userModel;
    protected $config;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->pengumumanModel = new PengumumanModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->jenjangModel = new JenjangModel();
        $this->penghasilanModel = new PenghasilanModel();
        $this->kompetensiModel = new KompetensiModel();
        $this->pekerjaanModel = new PekerjaanModel();
        $this->statusModel = new StatusPpdbModel();
        $this->materiModel = new MateriModel();
        $this->jadwalModel = new JadwalModel();
        $this->userModel = new UserModel();

        $this->config = config('Auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'lembaga' => $this->lembaga,
            'status' => $this->statusModel->first(),
            'pendaftar' => $this->siswaModel->where('status_pendaftaran', 2)->countAllResults(),
            'totalLulus' => $this->siswaModel->where('status_kelulusan', 1)->countAllResults(),
            'totalTidakLulus' => $this->siswaModel->where('status_kelulusan', 2)->countAllResults(),
        ];
        if (in_groups('siswa')) {
            $data += [
                'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
                'pengumuman' => $this->pengumumanModel->orderBy('tgl_pengumuman', 'DESC')->findAll()
            ];

            $data['jadwal'] = $this->jadwalModel->where('jenjang', $data['siswa']['jenjang_daftar'])->orderBy('tgl_mulai', 'ASC')->findAll();
            $data['materi'] = $this->materiModel->where('jenjang', $data['siswa']['jenjang_daftar'])->first();
            $jadwal_hari_ini = $this->jadwalModel->select('judul')->where('jenjang', $data['siswa']['jenjang_daftar'])->where('tgl_mulai <=', Time::now('Asia/Jakarta')->toDateString())->where('tgl_selesai >=', Time::now('Asia/Jakarta')->toDateString())->findAll();
//            dd(end($data['jadwal_hari_ini'])['judul']);
//            $data['jadwal_hari_ini'] = end($jadwal_hari_ini)['judul'];
            $data['jadwal_hari_ini'] = array_column($jadwal_hari_ini, 'judul');
//            dd($jadwal_hari_ini);
//            dd(Time::now('Asia/Jakarta')->toDateString());

//            cek array apakah include string

            if ($data['siswa']['status_pendaftaran'] != 2) {
                return view('panel/index-siswa-belum-bayar', $data);
            }
            return view('panel/index-siswa', $data);
        }
        return view('panel/index', $data);
    }

    public function profile()
    {
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

    public function jadwal()
    {

        $siswa = $this->siswaModel->where('no_pendaftaran', user()->username)->first();
        $data = [
            'title' => 'Jadwal PPDB',
            'lembaga' => $this->lembaga,
            'jenjang' => $siswa['jenjang_daftar'],
            'jadwal' => $this->jadwalModel->where('jenjang', $siswa['jenjang_daftar'])->orderBy('tgl_mulai', 'ASC')->findAll(),
        ];
        return view('panel/jadwal-siswa', $data);
    }

    public function cetakBiodata()
    {
        $data = [
            'title' => 'Cetak Biodata',
            'lembaga' => $this->lembaga,
            'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
        ];
//        return view('panel/cetak-biodata', $data);
        $options = new Options();
        $options->setChroot(FCPATH);

        $dompdf = new Dompdf();
        $html = view('panel/cetak-biodata', $data);
        $dompdf->loadHtml($html);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('biodata.pdf', array('Attachment' => false));
    }

//    cetak bukti kelulusan
    public function cetakBuktiKelulusan()
    {
        $keteranganBuktiModel = new KeteranganBuktiModel();
        $data = [
            'title' => 'Cetak Bukti Kelulusan',
            'lembaga' => $this->lembaga,
            'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
        ];
            $data['keterangan'] = $keteranganBuktiModel->where('jenjang', $data['siswa']['jenjang_daftar'])->first();
//        return view('panel/cetak-bukti-kelulusan', $data);
        $options = new Options();
        $options->setChroot(FCPATH);

        $dompdf = new Dompdf();
        $html = view('panel/cetak-bukti-kelulusan', $data);
        $dompdf->loadHtml($html);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('bukti-kelulusan.pdf', array('Attachment' => false));
    }

    public function accountSettings()
    {
        $data = [
            'title' => 'Pengaturan Akun',
            'validation' => Services::validation(),
            'user' => $this->userModel->where('username', user()->username)->first(),
            'lembaga' => $this->lembaga,
        ];
        return view('panel/edit-akun', $data);
    }

    public function updateAccountInfo()
    {

        $usernameLama = $this->request->getVar('usernameLama');
        $usernameBaru = $this->request->getVar('username');

        if ($usernameLama == $usernameBaru) {
            return redirect()->back();
        }

        $rules = [
            'username' => 'required|min_length[3]|max_length[30]|is_unique[users.username]',
            'fullname' => 'required|alpha_space|min_length[3]|max_length[30]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $allowedPostFields = array_merge(['id'], $this->config->validFields, $this->config->personalFields);
        $user = new User($this->request->getPost($allowedPostFields));

        $user->activate();

        if (!$this->userModel->skipValidation()->save($user)) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        // Success!
        session()->setFlashdata('pesan', 'Info akun pengguna telah diperbarui.');
        return redirect()->back();
    }

    public function updatePassword(){
        //password tidak boleh = current password
        $rules = [
            'current_password' => 'required|min_length[5]|max_length[255]',
            'password' => 'required|min_length[5]|max_length[255]',
            'pass_confirm' => 'matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = $this->userModel->where('username', user()->username)->first();
        $verify = Password::verify($this->request->getPost('current_password'), $user->password_hash);

        if(!$verify){
            return redirect()->back()->withInput()->with('errors', ['current_password' => 'Password lama tidak sesuai.']);
        }

        if ($this->request->getPost('password') == $this->request->getPost('current_password')) {
            return redirect()->back()->withInput()->with('errors', ['password' => 'Password baru tidak boleh sama dengan password lama.']);
        }


        if (!$this->userModel->skipValidation()->save([
            'id' => user()->id,
            'password_hash' => Password::hash($this->request->getPost('password')),
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }

        // Success!
        session()->setFlashdata('pesan', 'Kata sandi telah diperbarui.');
        return redirect()->back();
    }
}
