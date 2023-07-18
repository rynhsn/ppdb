<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KeteranganBuktiSeeder extends Seeder
{
    public function run()
    {
        // Contoh isi yang dihasilkan dari CKEditor
        $isiSMP = '<p>Ini adalah keterangan bukti untuk SMP</p>';
        $isiSMK = '<p>Ini adalah keterangan bukti untuk SMK</p>';
        $isiMadrasahAliyah = '<p>Ini adalah keterangan bukti untuk Madrasah Aliyah</p>';

        $data = [
            [
                'jenjang' => 'SMP',
                'isi' => $isiSMP,
            ],
            [
                'jenjang' => 'SMK',
                'isi' => $isiSMK,
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'isi' => $isiMadrasahAliyah,
            ],
        ];

        $this->db->table('keterangan_bukti')->insertBatch($data);
    }
}
