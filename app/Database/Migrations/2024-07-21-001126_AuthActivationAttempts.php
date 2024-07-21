<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthActivationAttempts extends Migration
{
    public function up()
    {
        // Activation Attempts Table
        $this->forge->addField([
            'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'ip_address' => ['type' => 'varchar', 'constraint' => 255],
            'user_agent' => ['type' => 'varchar', 'constraint' => 255],
            'token'      => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'created_at' => ['type' => 'datetime', 'null' => false],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('auth_activation_attempts', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('auth_activation_attempts', true);

    }
}
