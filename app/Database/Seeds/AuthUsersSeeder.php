<?php

namespace App\Database\Seeds;

use App\Entities\User;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class AuthUsersSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $data = [
            'username' => 'admin',
            'fullname' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => 'admin',
        ];

        $user = new User($data);
        $user->activate();
        // Insert user
        $userModel->withGroup('admin')->skipValidation(true)->protect(false)->save($user);

        $data = [
            'username' => 'pimpinan',
            'fullname' => 'Pimpinan',
            'email' => 'pimpinan@example.com',
            'password' => 'pimpinan',
        ];

        $user = new User($data);
        $user->activate();
        // Insert user
        $userModel->withGroup('pimpinan')->skipValidation(true)->protect(false)->save($user);

        $data = [
            'username' => 'keuangan',
            'fullname' => 'Keuangan',
            'email' => 'keuangan@example.com',
            'password' => 'keuangan',
        ];

        $user = new User($data);
        $user->activate();
        // Insert user
        $userModel->withGroup('keuangan')->skipValidation(true)->protect(false)->save($user);

        $data = [
            'username' => 'seleksi',
            'fullname' => 'Tim Seleksi',
            'email' => 'seleksi@example.com',
            'password' => 'seleksi',
        ];

        $user = new User($data);
        $user->activate();
        // Insert user
        $userModel->withGroup('seleksi')->skipValidation(true)->protect(false)->save($user);
//
        $data = [
            'username' => 'PD-202300001',
            'fullname' => 'Siswa',
            'email' => 'PD-202300001@example.com',
            'password' => 'siswa',
        ];

        $user = new User($data);
        $user->activate();
        // Insert user
        $userModel->withGroup('siswa')->skipValidation(true)->protect(false)->save($user);

        $data = [
            'no_pendaftaran' => 'PD-202300001',
//            'nis' => '12345',
            'nisn' => '67890',
            'nik' => '9876543210',
            'nama_lengkap' => 'Siswa',
            'jk' => 'Laki-laki',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
//            'status_keluarga' => 'Tidak Ada',
//            'anak_ke' => '1',
//            'jml_saudara' => '2',
//            'hobi' => 'Membaca',
//            'cita' => 'Dokter',
//            'paud' => 'Ya',
//            'tk' => 'Tidak',
            'alamat_siswa' => 'Jl. Contoh No. 123',
            'jenis_tinggal' => 'Rumah Sendiri',
            'desa' => 'Desa Contoh',
            'kec' => 'Kecamatan Contoh',
            'kab' => 'Kabupaten Contoh',
            'prov' => 'Provinsi Contoh',
            'kode_pos' => '12345',
            'nama_ayah' => 'Ayah Contoh',
            'nama_ibu' => 'Ibu Contoh',
            'no_hp_ortu' => '081234567890',
            'nama_sekolah' => 'Sekolah Contoh',
            'lokasi_sekolah' => 'Jakarta',
            'no_un' => '1234567890',
            'no_seri_ijazah' => '1234567890123456',
            'no_seri_skhun' => '1234567890',
            'sttb_lulus' => '1234567890/2023',
            'jenjang_daftar' => 'SMK',
            'tgl_siswa' => date('Y-m-d H:i:s'),
            'status_kelulusan' => '0',
            'status_verifikasi' => '0',
            'status_pendaftaran' => '0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('siswa')->insert($data);
    }
}
