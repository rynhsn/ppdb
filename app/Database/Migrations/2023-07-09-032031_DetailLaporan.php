<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailLaporan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'laporan_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'siswa_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('laporan_id', 'laporan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('siswa_id', 'siswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_laporan');
    }

    public function down()
    {
        $this->forge->dropTable('detail_laporan');
    }
}
