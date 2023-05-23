<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'description'  => 'Tidak Sekolah',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'SD/Sederajat',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'SMP/Sederajat',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'SMA/Sederajat',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'Diploma (D1-D3)',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'Sarjana (S1)',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'Magister (S2)',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'description'  => 'Doktor (S3)',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]
        ];

        // Using Query Builder
        $this->db->table('pendidikan')->insertBatch($data);
    }
}
