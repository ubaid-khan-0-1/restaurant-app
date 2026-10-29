<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'item_id'   => ['type' => 'INT', 'auto_increment' => true],
            'item_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'cat_id'    => ['type' => 'INT'],
            'menu_id'   => ['type' => 'INT'],
            'size'      => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true], // Small, Large
            'price'     => ['type' => 'DECIMAL', 'constraint' => '10,2'],
        ]);
        $this->forge->addKey('item_id', true);
        $this->forge->createTable('items');
    }
    
    public function down() { $this->forge->dropTable('items'); }
}
