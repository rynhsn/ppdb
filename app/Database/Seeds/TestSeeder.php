<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('JenjangSeeder');
        $this->call('KompetensiSeeder');
        $this->call('PekerjaanSeeder');
        $this->call('PendidikanSeeder');
        $this->call('PenghasilanSeeder');
        $this->call('ProfileLembagaSeeder');
        $this->call('StatusPpdbSeeder');
        $this->call('LinkTestSeeder');
        $this->call('JadwalPpdbSeeder');
        $this->call('MateriJadwalUjianSeeder');
        $this->call('KeteranganBuktiSeeder');
        $this->call('AuthGroupsSeeder');
        $this->call('AuthPermissionsSeeder');
        $this->call('AuthGroupsPermissionsSeeder');
        $this->call('AuthUsersSeeder');

    }
}
