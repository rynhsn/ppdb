<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalPpdb extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tgl_mulai' => [
                'type' => 'DATE',
            ],
            'tgl_selesai' => [
                'type' => 'DATE',
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
        $this->forge->createTable('jadwal_ppdb');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal_ppdb');
    }
}
