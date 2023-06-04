<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MateriJadwalUjianSeeder extends Seeder
{
    public function run()
    {
        // Contoh isi yang dihasilkan dari CKEditor
        $isiSMP = '<p>Ini adalah materi ujian untuk SMP</p>';
        $isiSMK = '<p>Ini adalah materi ujian untuk SMK</p>';
        $isiMadrasahAliyah = '<p>Ini adalah materi ujian untuk Madrasah Aliyah</p>';

        $data = [
            [
                'jenjang' => 'SMP',
                'isi' => $isiSMP,
                'ket' => 'Keterangan materi ujian SMP',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jenjang' => 'SMK',
                'isi' => $isiSMK,
                'ket' => 'Keterangan materi ujian SMK',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'isi' => $isiMadrasahAliyah,
                'ket' => 'Keterangan materi ujian Madrasah Aliyah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('materi_jadwal_ujian')->insertBatch($data);
    }
}
