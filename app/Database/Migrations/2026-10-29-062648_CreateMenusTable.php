<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenusTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id'   => ['type' => 'INT', 'auto_increment' => true],
            'menu_name' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('menu_id', true);
        $this->forge->createTable('menus');
    }
    
    public function down() { $this->forge->dropTable('menus'); }
}
