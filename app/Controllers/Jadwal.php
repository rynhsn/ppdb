<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use CodeIgniter\I18n\Time;

class Jadwal extends BaseController
{
    protected $jadwalModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
    }
    public function index($jenjang = null)
    {
        if ($jenjang == null) {
            return redirect()->to('/panel');
        }
        $data=[
            'title' => 'Jadwal PPDB',
            'lembaga' => $this->lembaga,
            'jenjang' => $jenjang,
            'jadwal' => $this->jadwalModel->where('jenjang', JENJANG[$jenjang])->orderBy('tgl_mulai', 'ASC')->findAll(),
        ];
        foreach ($data['jadwal'] as $key => $value) {
            $data['jadwal'][$key]['tgl'] = Time::parse($value['tgl_mulai'])->toLocalizedString('MM-dd-yyyy') . ' - ' .Time::parse($value['tgl_selesai'])->toLocalizedString('MM-dd-yyyy');
        }
        return view('panel/jadwal', $data);
    }
    public function save($jenjang, $id = null)
    {
        $tgl = explode(' - ', $this->request->getVar('tgl'));
        $data = [
            'jenjang' => JENJANG[$jenjang],
            'judul' => $this->request->getVar('judul'),
            'tgl_mulai' => Time::parse($tgl[0], 'Asia/Jakarta')->toDateTimeString(),
            'tgl_selesai' => Time::parse($tgl[1], 'Asia/Jakarta')->toDateTimeString(),
        ];

        if($id){
            $data['id'] = $id;
        }

        $this->jadwalModel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/panel/jadwal/'.$jenjang);
    }

    public function delete($jenjang, $id)
    {
        $this->jadwalModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/panel/jadwal/'.$jenjang);
    }
}
