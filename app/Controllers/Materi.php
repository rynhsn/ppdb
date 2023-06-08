<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenjangModel;
use App\Models\LinkTestModel;
use App\Models\MateriModel;

class Materi extends BaseController
{
    protected $materiModel;
    protected $jenjangModel;
    protected $linkModel;

    //constructor
    public function __construct()
    {
        $this->materiModel = new MateriModel();
        $this->jenjangModel = new JenjangModel();
        $this->linkModel = new LinkTestModel();
    }
    public function index($jenjang = null)
    {
        if ($jenjang == null) {
            return redirect()->to('/panel');
        }
        $data=[
            'title' => 'Materi dan Jadwal Ujian',
            'lembaga' => $this->lembaga,
            'jenjang' => $jenjang,
            'materi' => $this->materiModel->where('jenjang', JENJANG[$jenjang])->first(),
            'link' => $this->linkModel->where('jenjang', JENJANG[$jenjang])->first(),
        ];
        return view('panel/materi', $data);
    }

    public function save($jenjang)
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'isi' => $this->request->getVar('isi'),
        ];
        $this->materiModel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/panel/materi/'.$jenjang);
    }

    public function saveLink($jenjang)
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'link' => $this->request->getVar('link'),
        ];
        $this->linkModel->save($data);
        session()->setFlashdata('pesan', 'Link test berhasil disimpan.');
        return redirect()->to('/panel/materi/'.$jenjang);
    }
}
