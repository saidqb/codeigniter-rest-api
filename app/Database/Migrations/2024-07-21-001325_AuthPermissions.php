<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthPermissions extends Migration
{
    public function up()
    {

        // Permissions Table
        $fields = [
            'id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'        => ['type' => 'varchar', 'constraint' => 255],
            'description' => ['type' => 'varchar', 'constraint' => 255],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('auth_permissions', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('auth_permissions', true);
    }
}
