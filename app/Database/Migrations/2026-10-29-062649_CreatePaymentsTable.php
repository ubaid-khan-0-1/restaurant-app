<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'order_id'       => ['type' => 'INT'],
            'amount'         => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'payment_method' => ['type' => 'VARCHAR', 'constraint' => 50],
            'status'         => ['type' => 'VARCHAR', 'constraint' => 20],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('order_id');
        $this->forge->createTable('payments');
    }
    
    public function down() { $this->forge->dropTable('payments'); }
}
