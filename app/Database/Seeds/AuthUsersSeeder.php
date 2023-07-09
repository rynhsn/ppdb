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
            'nis' => '12345',
            'nisn' => '67890',
            'nik' => '9876543210',
            'nama_lengkap' => 'Siswa',
            'jk' => 'Laki-laki',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'status_keluarga' => 'Tidak Ada',
            'anak_ke' => '1',
            'jml_saudara' => '2',
            'hobi' => 'Membaca',
            'cita' => 'Dokter',
            'paud' => 'Ya',
            'tk' => 'Tidak',
            'alamat_siswa' => 'Jl. Contoh No. 123',
            'jenis_tinggal' => 'Rumah Sendiri',
            'desa' => 'Desa Contoh',
            'kec' => 'Kecamatan Contoh',
            'kab' => 'Kabupaten Contoh',
            'prov' => 'Provinsi Contoh',
            'kode_pos' => '12345',
            'jarak' => '5 km',
            'trans' => 'Jalan Kaki',
            'no_hp_siswa' => '081234567890',
            'no_kk' => '1234567890123456',
            'kepala_keluarga' => 'Bapak Contoh',
            'nama_ayah' => 'Ayah Contoh',
            'nik_ayah' => '0987654321',
            'status_ayah' => 'Hidup',
            'th_lahir_ayah' => '1970',
            'pdd_ayah' => 'SD Sederajat',
            'pekerjaan_ayah' => 'Pegawai Swasta',
            'penghasilan_ayah' => '10,000,000',
            'nama_ibu' => 'Ibu Contoh',
            'nik_ibu' => '1234567890',
            'status_ibu' => 'Hidup',
            'th_lahir_ibu' => '1975',
            'pdd_ibu' => 'SD Sederajat',
            'pekerjaan_ibu' => 'Pegawai Negeri',
            'penghasilan_ibu' => '8,000,000',
            'nama_wali' => 'Wali Contoh',
            'nik_wali' => '0987654321',
            'th_lahir_wali' => '1965',
            'pdd_wali' => 'SMP Sederajat',
            'pekerjaan_wali' => 'Wiraswasta',
            'penghasilan_wali' => '5,000,000',
            'no_hp_ortu' => '081234567890',
            'npsn_sekolah' => '1234567890',
            'nama_sekolah' => 'Sekolah Contoh',
            'status_sekolah' => 'Negeri',
            'jenjang_sekolah' => 'SMP',
            'lokasi_sekolah' => 'Jakarta',
            'no_kks' => '1234567890123456',
            'no_pkh' => '1234567890',
            'no_kip' => '1234567890',
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
