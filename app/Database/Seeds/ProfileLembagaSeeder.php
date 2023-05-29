<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileLembagaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lembaga'  => 'Yayasan Pondok Pesantren Jamiatul Ikhwan',
                'alamat'        => 'Jl. Pasopati no. 65 Serang',
                'email'         => 'info@test.sch.id',
                'website'       => 'www.test.sch.id',
                'telp'          => '082-444-784-890',
                'kab_lembaga'   => 'Serang',
                'ketua_panitia' => 'Dra. Rahayu Ningtyas',
                'nip_ketua'     => '198909153007101112',
                'th_pelajaran'  => '2021-2022',
                'no_surat'      => '001/MA.11.12/KP.00.02/IV/2021',
                'kepsek'        => 'Drs. Asnawi Yanto',
                'nip_kepsek'    => '198909153007101112',
                'logo'          => 'logo.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => null,
            ],
        ];

        // Using Query Builder
        $this->db->table('profile_lembaga')->insertBatch($data);
    }

}
