<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\JenjangModel;
use App\Models\KompetensiModel;
use App\Models\MateriModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PenghasilanModel;
use App\Models\PengumumanModel;
use App\Models\SiswaModel;
use App\Models\StatusPpdbModel;
use CodeIgniter\I18n\Time;
use Dompdf\Dompdf;
use Dompdf\Options;

class Panel extends BaseController
{
    protected $siswaModel;
    private $statusModel;
    protected $pengumumanModel;
    protected $pendidikanModel;
    protected $jenjangModel;
    protected $penghasilanModel;
    protected $kompetensiModel;
    protected $pekerjaanModel;
    protected $materiModel;
    protected $jadwalModel;

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
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'lembaga' => $this->lembaga,
            'status' => $this->statusModel->first(),
        ];
        if (in_groups('siswa')) {
            $data += [
                'siswa' => $this->siswaModel->where('no_pendaftaran', user()->username)->first(),
                'pengumuman' => $this->pengumumanModel->orderBy('tgl_pengumuman', 'DESC')->findAll()
            ];

            $data['jadwal'] = $this->jadwalModel->where('jenjang', $data['siswa']['jenjang_daftar'])->orderBy('tgl_mulai', 'ASC')->findAll();
            $data['materi'] = $this->materiModel->where('jenjang', $data['siswa']['jenjang_daftar'])->first();
            $jadwal_hari_ini = $this->jadwalModel->where('jenjang', $data['siswa']['jenjang_daftar'])->where('tgl_mulai <=', Time::now('Asia/Jakarta')->toDateTimeString())->where('tgl_selesai >=', Time::now('Asia/Jakarta')->toDateTimeString())->findAll();
//            dd(end($data['jadwal_hari_ini'])['judul']);
            $data['jadwal_hari_ini'] = end($jadwal_hari_ini)['judul'];
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

    public function cetakBiodata(){
        $data=[
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
}
