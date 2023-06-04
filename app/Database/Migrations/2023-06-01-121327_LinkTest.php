<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LinkTest extends Migration
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
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('link_test');
    }

    public function down()
    {
        $this->forge->dropTable('link_test');
    }
}
