<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusPpdbSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'status'      => 'buka',
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('status_ppdb')->insertBatch($data);
    }

}
