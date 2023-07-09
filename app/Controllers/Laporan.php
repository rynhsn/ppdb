<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailLaporanModel;
use App\Models\LaporanModel;
use App\Models\SiswaModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Laporan extends BaseController
{
    protected $laporanModel;
    protected $siswaModel;
    protected DetailLaporanModel $detailLaporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->detailLaporanModel = new DetailLaporanModel();
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {
//        dd($this->laporanModel->getLaporan());
        $data = [
            'title' => 'Laporan',
            'lembaga' => $this->lembaga,
            'periode' => $this->laporanModel->getPeriode(),
            'laporan' => $this->laporanModel->findAll(),
            'tahun' => '',
            'jenjang' => ''
        ];

        if ($this->request->getGet()) {
            $query = [
                'jenjang' => $this->request->getVar('jenjang'),
                'periode_awal' => $this->request->getVar('periode')
            ];
            $data['tahun'] = $this->request->getVar('periode');
            $data['jenjang'] = $this->request->getVar('jenjang');
            $data['laporan'] = $this->laporanModel->where($query)->findAll();
        }

        return view('laporan/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Laporan',
            'lembaga' => $this->lembaga,
            'laporan' => $this->laporanModel->find($id),
            'detail' => $this->detailLaporanModel->getDetail($id)
        ];

        return view('laporan/detail', $data);
    }

    public function create()
    {
        $cekLaporan = $this->laporanModel->where('periode_awal', $this->request->getVar('periode'))->where('jenjang', $this->request->getVar('jenjang'))->first();
        if ($cekLaporan) {
            session()->setFlashdata('error', 'Laporan sudah ada!.');
            return redirect()->back();
        }

        $data = [
            'jenjang' => $this->request->getVar('jenjang'),
            'periode_awal' => $this->request->getVar('periode'),
            'periode_akhir' => $this->request->getVar('periode') + 1,
            'keterangan' => $this->request->getVar('keterangan'),
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        if (!$this->laporanModel->save($data)) {
            session()->setFlashdata('error', 'Laporan gagal disimpan!.');
            return redirect()->back();
        }

        $laporanId = $this->laporanModel->getInsertID();

        $siswa = $this->siswaModel->where('jenjang_daftar', $data['jenjang'])->where('YEAR(created_at)', $data['periode_awal'])->where('status_pendaftaran', '2')->findAll();

        foreach ($siswa as $s) {
            $detail = [
                'laporan_id' => $laporanId,
                'siswa_id' => $s['id'],
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->detailLaporanModel->save($detail);
        }

        session()->setFlashdata('pesan', 'Laporan berhasil dibuat.');
        return redirect()->back();
    }

    public function perbarui($id)
    {
        $this->detailLaporanModel->where('laporan_id', $id)->delete();
        $laporan = $this->laporanModel->find($id);
        $siswa = $this->siswaModel->where('jenjang_daftar', $laporan['jenjang'])->where('YEAR(created_at)', $laporan['periode_awal'])->where('status_pendaftaran', '2')->findAll();

        $data = [
            'id' => $id,
            'keterangan' => $this->request->getVar('keterangan'),
            'status' => 2,
        ];

        if (!$this->laporanModel->save($data)) {
            session()->setFlashdata('error', 'Laporan gagal diperbarui!.');
            return redirect()->back();
        }

        foreach ($siswa as $s) {
            $detail = [
                'laporan_id' => $id,
                'siswa_id' => $s['id'],
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->detailLaporanModel->save($detail);
        }

        session()->setFlashdata('pesan', 'Laporan berhasil diperbarui.');
        return redirect()->back();
    }

    public function tolak($id)
    {
        $data = [
            'id' => $id,
            'komentar' => $this->request->getVar('komentar'),
            'status' => 99,
        ];

        if (!$this->laporanModel->save($data)) {
            session()->setFlashdata('error', 'Laporan gagal ditolak!.');
            return redirect()->back();
        }

        session()->setFlashdata('pesan', 'Laporan berhasil ditolak.');
        return redirect()->back();
    }

    public function terima($id)
    {
        $data = [
            'id' => $id,
            'komentar' => $this->request->getVar('komentar'),
            'status' => 1,
        ];

        if (!$this->laporanModel->save($data)) {
            session()->setFlashdata('error', 'Laporan gagal diterima!.');
            return redirect()->back();
        }

        session()->setFlashdata('pesan', 'Laporan berhasil diterima.');
        return redirect()->back();
    }

    public function cetak($id)
    {
        $data = [
            'title' => 'Cetak Laporan',
            'lembaga' => $this->lembaga,
            'laporan' => $this->laporanModel->find($id),
            'detail' => $this->detailLaporanModel->getDetail($id),
        ];

        $data['jenjang'] = $data['laporan']['jenjang'];
        $data['tahun_ajaran'] = $data['laporan']['periode_awal'] . '/' . $data['laporan']['periode_akhir'];
        //buat nama file karakter acak
        $filename = 'PPDB ' . $data['jenjang'] . '-' . time() . '.pdf';
        $options = new Options();
        $options->setChroot(FCPATH);

        $dompdf = new Dompdf();
        $html = view('laporan/cetak', $data);
        $dompdf->loadHtml($html);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array('Attachment' => false));
    }
}
