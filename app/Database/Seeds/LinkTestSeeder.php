<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LinkTestSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jenjang' => 'SMP',
                'link' => 'http://link-smp.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jenjang' => 'SMK',
                'link' => 'http://link-smk.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'link' => 'http://link-madrasah-aliyah.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data ke tabel link_test
        $this->db->table('link_test')->insertBatch($data);
    }
}
