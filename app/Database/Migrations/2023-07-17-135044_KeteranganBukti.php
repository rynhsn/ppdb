<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KeteranganBukti extends Migration
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
        ]
    ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('keterangan_bukti');
    }

    public function down()
    {
        $this->forge->dropTable('keterangan_bukti');
    }
}
