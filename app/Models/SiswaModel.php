<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'siswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_pendaftaran', 'jenjang_daftar', 'nama_lengkap', 'nisn', 'nik', 'jk', 'tempat_lahir', 'tgl_lahir', 'agama', 'anak_ke', 'jml_saudara', 'no_hp_siswa', 'alamat_siswa', 'jenis_tinggal', 'desa', 'kec', 'kab', 'prov', 'kode_pos', 'jarak', 'trans', 'no_kk', 'nama_ayah', 'nik_ayah', 'pekerjaan_ayah', 'pdd_ayah', 'penghasilan_ayah', 'status_ayah', 'th_lahir_ayah', 'nama_ibu', 'nik_ibu', 'pekerjaan_ibu', 'pdd_ibu', 'penghasilan_ibu', 'status_ibu', 'th_lahir_ibu', 'nama_wali', 'nik_wali', 'pdd_wali', 'pekerjaan_wali', 'penghasilan_wali', 'th_lahir_wali', 'no_hp_ortu', 'npsn_sekolah', 'nama_sekolah', 'lokasi_sekolah', 'no_kks', 'no_pkh', 'no_kip', 'status_verifikasi', 'status_pendaftaran', 'nilai', 'created_at', 'updated_at'];

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
}
