<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 100, 'unsigned' => true, 'auto_increment' => true,],
            'no_pendaftaran' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => false,],
            'nis' => ['type' => 'VARCHAR', 'constraint' => '10', 'null' => true,],
            'nisn' => ['type' => 'VARCHAR', 'constraint' => '10', 'null' => true,],
            'nik' => ['type' => 'TEXT', 'null' => true,],
            'nama_lengkap' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'jk' => ['type' => 'VARCHAR', 'constraint' => '12', 'null' => true,],
            'tempat_lahir' => ['type' => 'TEXT', 'null' => true,],
            'tgl_lahir' => ['type' => 'VARCHAR', 'constraint' => '10', 'null' => true,],
            'agama' => ['type' => 'VARCHAR', 'constraint' => '30', 'null' => true,],
            'status_keluarga' => ['type' => 'VARCHAR', 'constraint' => '30', 'null' => true,],
            'anak_ke' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'jml_saudara' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'hobi' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'cita' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'paud' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'tk' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'alamat_siswa' => ['type' => 'TEXT', 'null' => true,],
            'jenis_tinggal' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'desa' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'kec' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'kab' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'prov' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'kode_pos' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'jarak' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'trans' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'no_hp_siswa' => ['type' => 'VARCHAR', 'constraint' => '14', 'null' => true,],
            'no_kk' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true,],
            'kepala_keluarga' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nama_ayah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nik_ayah' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true,],
            'status_ayah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'th_lahir_ayah' => ['type' => 'VARCHAR', 'constraint' => '10', 'null' => true,],
            'pdd_ayah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'pekerjaan_ayah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'penghasilan_ayah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nama_ibu' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nik_ibu' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true,],
            'status_ibu' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'th_lahir_ibu' => ['type' => 'VARCHAR', 'constraint' => '10', 'null' => true,],
            'pdd_ibu' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'pekerjaan_ibu' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'penghasilan_ibu' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nama_wali' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nik_wali' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true,],
            'th_lahir_wali' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'pdd_wali' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'pekerjaan_wali' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'penghasilan_wali' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'no_hp_ortu' => ['type' => 'VARCHAR', 'constraint' => '14', 'null' => true,],
            'npsn_sekolah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'nama_sekolah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'status_sekolah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'jenjang_sekolah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'lokasi_sekolah' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'no_kks' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'no_pkh' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'no_kip' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'jenjang_daftar' => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true,],
            'komp_ahli' => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true,],
            'tgl_siswa' => ['type' => 'DATETIME', 'null' => true,],
            'status_kelulusan' => ['type' => 'VARCHAR', 'constraint' => '20', 'default' => '0',],
            'status_verifikasi' => ['type' => 'VARCHAR', 'constraint' => '30', 'default' => '0',],
            'status_pendaftaran' => ['type' => 'VARCHAR', 'constraint' => '20', 'default' => '0',],
            'nilai' => ['type' => 'INT', 'contraint' => '5', 'null' => true,],
            'created_at' => ['type' => 'DATETIME', 'null' => true,],
            'updated_at' => ['type' => 'DATETIME', 'null' => true,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
