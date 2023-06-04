<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MateriJadwalUjian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenjang' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'isi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ket' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('materi_jadwal_ujian');
    }

    public function down()
    {
        $this->forge->dropTable('materi_jadwal_ujian');
    }
}
