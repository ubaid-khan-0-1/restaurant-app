<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cat_id'   => ['type' => 'INT', 'auto_increment' => true],
            'cat_name' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('cat_id', true);
        $this->forge->createTable('categories');
    }
    
    public function down() { $this->forge->dropTable('categories'); }
}
