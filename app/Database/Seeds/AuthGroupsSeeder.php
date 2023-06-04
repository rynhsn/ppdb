<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'            => 'admin',
                'description'     => 'Site Administrator',
            ],
            [
                'name'            => 'pimpinan',
                'description'     => 'Pimpinan Lembaga',
            ],
            [
                'name'            => 'keuangan',
                'description'     => 'Keuangan PPDB',
            ],
            [
                'name'            => 'seleksi',
                'description'     => 'Tim Seleksi PPDB',
            ],
            [
                'name'            => 'siswa',
                'description'     => 'Calon Peserta Didik Baru',
            ],
        ];

        // Using Query Builder
        $this->db->table('auth_groups')->insertBatch($data);
    }
}