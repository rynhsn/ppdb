<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenjangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'description'     => 'SMP',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'     => 'SMA',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('jenjang')->insertBatch($data);
    }

}
