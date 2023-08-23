<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'no_pendaftaran',
        'jenjang_daftar',
        'nama_lengkap',
        'nisn',
        'nik',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'anak_ke',
        'alamat_siswa',
        'jenis_tinggal',
        'desa',
        'kec',
        'kab',
        'prov',
        'kode_pos',
        'nama_ayah',
        'nama_ibu',
        'no_hp_ortu',
        'nama_sekolah',
        'lokasi_sekolah',
        'no_un',
        'no_seri_ijazah',
        'no_seri_skhun',
        'sttb_lulus',
        'file_surat_kelulusan',
        'file_kk',
        'file_ktp_ayah',
        'file_ktp_ibu',
        'file_akta',
        'file_foto',
        'file_ijazah',
        'file_kip',
        'tgl_siswa',
        'status_kelulusan',
        'status_verifikasi',
        'status_pendaftaran',
        'nilai',
        'created_at',
        'updated_at'];

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

    public function getJumlahSiswa($numYears, $jenjang)
    {
        $currentYear = date('Y');
        $startYear = $currentYear - $numYears + 1;

        $result = $this->db->table('siswa')
            ->select("YEAR(created_at) as tahun, IFNULL(COUNT(*), 0) as jumlah", false)
            ->where("YEAR(created_at) >= $startYear")
            ->groupBy('YEAR(created_at)')
            ->get()
            ->getResultArray();

        // Fill in missing years with zero count
        $data = [];
        for ($i = $startYear; $i <= $currentYear; $i++) {
            $found = false;
            foreach ($result as $row) {
                if ($row['tahun'] == $i) {
                    $data[] = $row;
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $data[] = ['tahun' => $i, 'jumlah' => 0];
            }
        }

        return $data;
    }
    public function getJumlahSiswaByJenjang($numYears, $jenjang)
    {
        $currentYear = date('Y');
        $startYear = $currentYear - $numYears + 1;

        $result = $this->db->table('siswa')
            ->select("YEAR(created_at) as tahun, IFNULL(COUNT(*), 0) as jumlah", false)
            ->where("YEAR(created_at) >= $startYear")
            ->where('jenjang_daftar', $jenjang)
            ->groupBy('YEAR(created_at)')
            ->get()
            ->getResultArray();

        $jumlahSiswa = [];
        for ($i = $startYear; $i <= $currentYear; $i++) {
            $found = false;
            foreach ($result as $row) {
                if ($row['tahun'] == $i) {
                    $jumlahSiswa[] = intval($row['jumlah']);
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $jumlahSiswa[] = 0;
            }
        }

        return $jumlahSiswa;
    }

//
//    public function getJumlahSiswaByJenjang($numYears, $jenjang)
//    {
//        $currentYear = date('Y');
//        $startYear = $currentYear - $numYears + 1;
//
//        $result = $this->db->table('siswa')
//            ->select("YEAR(created_at) as tahun, IFNULL(COUNT(*), 0) as jumlah", false)
//            ->where("YEAR(created_at) >= $startYear")
//            ->where('jenjang_daftar', $jenjang) // Adding condition for jenjang_daftar
//            ->groupBy('YEAR(created_at)')
//            ->get()
//            ->getResultArray();
//
//        // Fill in missing years with zero count
//        $data = [];
//        for ($i = $startYear; $i <= $currentYear; $i++) {
//            $found = false;
//            foreach ($result as $row) {
//                if ($row['tahun'] == $i) {
//                    $data[] = $row;
//                    $found = true;
//                    break;
//                }
//            }
//            if (!$found) {
//                $data[] = ['tahun' => $i, 'jumlah' => 0];
//            }
//        }
//
//        return $result;
//    }


}
