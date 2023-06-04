<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JadwalPpdbSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Data untuk SMP
            [
                'jenjang' => 'SMP',
                'judul' => 'Pembukaan PPDB SMP',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-06-02',
            ],
            [
                'jenjang' => 'SMP',
                'judul' => 'Tahap Validasi',
                'tgl_mulai' => '2023-07-31',
                'tgl_selesai' => '2023-08-05',
            ],
            [
                'jenjang' => 'SMP',
                'judul' => 'Pendaftaran',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-07-31',
            ],
            [
                'jenjang' => 'SMP',
                'judul' => 'Tes Seleksi',
                'tgl_mulai' => '2023-08-07',
                'tgl_selesai' => '2023-08-07',
            ],
            [
                'jenjang' => 'SMP',
                'judul' => 'Pengumuman Seleksi',
                'tgl_mulai' => '2023-08-08',
                'tgl_selesai' => '2023-08-08',
            ],
            [
                'jenjang' => 'SMP',
                'judul' => 'Selesai',
                'tgl_mulai' => '2023-08-09',
                'tgl_selesai' => '2023-08-09',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Pembukaan PPDB SMK',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-06-02',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Tahap Validasi',
                'tgl_mulai' => '2023-07-31',
                'tgl_selesai' => '2023-08-05',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Pendaftaran',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-07-31',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Tes Seleksi',
                'tgl_mulai' => '2023-08-07',
                'tgl_selesai' => '2023-08-07',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Pengumuman Seleksi',
                'tgl_mulai' => '2023-08-08',
                'tgl_selesai' => '2023-08-08',
            ],
            [
                'jenjang' => 'SMK',
                'judul' => 'Selesai',
                'tgl_mulai' => '2023-08-09',
                'tgl_selesai' => '2023-08-09',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Pembukaan PPDB Madrasah Aliyah',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-06-02',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Tahap Validasi',
                'tgl_mulai' => '2023-07-31',
                'tgl_selesai' => '2023-08-05',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Pendaftaran',
                'tgl_mulai' => '2023-06-02',
                'tgl_selesai' => '2023-07-31',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Tes Seleksi',
                'tgl_mulai' => '2023-08-07',
                'tgl_selesai' => '2023-08-07',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Pengumuman Seleksi',
                'tgl_mulai' => '2023-08-08',
                'tgl_selesai' => '2023-08-08',
            ],
            [
                'jenjang' => 'Madrasah Aliyah',
                'judul' => 'Selesai',
                'tgl_mulai' => '2023-08-09',
                'tgl_selesai' => '2023-08-09',
            ],

        ];

        // Insert data ke tabel pengumuman
        $this->db->table('jadwal_ppdb')->insertBatch($data);
    }
}
