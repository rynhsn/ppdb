<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendidikanModel;
use App\Models\JenjangModel;
use App\Models\PenghasilanModel;
use App\Models\KompetensiModel;
use App\Models\PekerjaanModel;
use \Config\Database;

class Helpers extends BaseController
{
    protected $pendidikan;
    protected $jenjang;
    protected $penghasilan;
    protected $kompetensi;
    protected $pekerjaan;
    protected $db;

    public function __construct()
    {
        $this->pendidikan = new PendidikanModel();
        $this->jenjang = new JenjangModel();
        $this->penghasilan = new PenghasilanModel();
        $this->kompetensi = new KompetensiModel();
        $this->pekerjaan = new PekerjaanModel();
        $this->db = Database::connect();
    }

    public function index()
    {
        $data = [
            'title' => 'Helpers',
            'pendidikan' => $this->pendidikan->findAll(),
            'jenjang' => $this->jenjang->findAll(),
            'penghasilan' => $this->penghasilan->findAll(),
            'kompetensi' => $this->kompetensi->findAll(),
            'pekerjaan' => $this->pekerjaan->findAll(),
            ];
        return view('helpers/index', $data);
    }

    public function save($table, $id = null){
        if(!$this->validate([
            'description'=> [
                'rules' => 'is_unique['.$table.'.description]',
                'errors' => [
                    'is_unique' => '{field} '. $table .' sudah terdaftar.'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $data = [
            'description' => $this->request->getVar('description'),
        ];

        if($id!=null){
            $this->db->table($table)->where('id', $id)->update($data);
        }else{
            $this->db->table($table)->insert($data);
        }

        session()->setFlashdata('pesan', $table . ' berhasil disimpan.');

        return redirect()->to('/helpers');
    }

    public function delete($table, $id){
        $this->db->table($table)->delete(['id'=>$id]);
        session()->setFlashdata('pesan', 'Data '.$table.' berhasil dihapus.');
        return redirect()->to('/helpers');
    }
}
