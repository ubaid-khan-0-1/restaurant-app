<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'auto_increment' => true],
            'order_id' => ['type' => 'INT'],
            'item_id'  => ['type' => 'INT'],
            'size'     => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'price'    => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'qty'      => ['type' => 'INT'],
            'total'    => ['type' => 'DECIMAL', 'constraint' => '10,2'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('order_id'); // Index for performance
        $this->forge->createTable('order_items');
    }
    
    public function down() { $this->forge->dropTable('order_items'); }
}
