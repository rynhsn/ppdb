<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailLaporanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail_laporan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['laporan_id', 'siswa_id', 'status_kelulusan', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getDetail($id)
    {
        $data = $this->db->table('detail_laporan')
            ->join('siswa', 'siswa.id = detail_laporan.siswa_id')
            ->where('detail_laporan.laporan_id', $id)
//            ->where('status_pendaftaran', '2')
            ->get()->getResultArray();

        return $data;
    }
}
