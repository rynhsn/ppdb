<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KompetensiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'description'  => 'IPA',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'IPS',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('kompetensi')->insertBatch($data);
    }
}
