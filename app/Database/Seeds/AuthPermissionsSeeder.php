<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthPermissionsSeeder extends Seeder
{
    public function run()
    {

        $data = [
            [
                'name'            => 'manage-accounts',
                'description'     => 'Manage All Accounts',
            ],
            [
                'name'            => 'manage-site',
                'description'     => 'Manage Site Info',
            ],
            [
                'name'            => 'manage-profile',
                'description'     => 'Manage Profile Info',
            ],
            [
                'name'            => 'manage-keuangan',
                'description'     => 'Manage Keuangan',
            ],
            [
                'name'            => 'akses-fitur-siswa',
                'description'     => 'Akses Fitur Siswa',
            ],
        ];

        // Using Query Builder
        $this->db->table('auth_permissions')->insertBatch($data);
    }
}
