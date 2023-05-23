<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengumuman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ket_pengumuman' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'tgl_pengumuman' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengumuman');
    }


    public function down()
    {
        $this->forge->dropTable('pengumuman');
    }
}
