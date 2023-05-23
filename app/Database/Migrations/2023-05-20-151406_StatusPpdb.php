<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusPpdb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('status_ppdb');
    }


    public function down()
    {
        $this->forge->dropTable('status_ppdb');
    }
}
