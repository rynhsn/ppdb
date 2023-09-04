<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['siswa_id', 'dari', 'ke', 'jumlah', 'tanggal', 'bukti', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

//    get pembayaran join siswa
    public function getByCond($cond)
    {
        return $this->db->table('pembayaran p')
            ->select('jumlah, dari, ke, tanggal, p.created_at, s.no_pendaftaran, s.nik, s.status_pendaftaran')
            ->join('siswa s', 's.id = p.siswa_id')
            ->whereIn('status_pendaftaran', [1, 2])
            ->where($cond)
            ->get()
            ->getResultArray();
    }
}
