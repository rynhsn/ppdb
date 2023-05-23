<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenghasilanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'description' => 'Kurang dari 1 juta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'description' => '1 juta - 3 juta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'description' => 'Lebih dari 3 juta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('penghasilan')->insertBatch($data);
    }
}
