<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMsg extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userid' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'messages' => [
                'type' => 'TEXT',
                'constraint' => '200'
            ],
        ]);
        $this->forge->addPrimaryKey('userid');
        $this->forge->createTable('user_msg');
    }

    public function down()
    {
        $this->forge->dropTable('user_msg');
    }
}
