<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Sample Orders (PDF Order History se 5 orders)
        $this->db->table('orders')->insertBatch([
            ['id' => 1, 'order_number' => 'ORD-102', 'order_date' => '2025-10-01', 'status' => 'completed', 'total_amount' => 2.50],
            ['id' => 2, 'order_number' => 'ORD-103', 'order_date' => '2025-10-01', 'status' => 'completed', 'total_amount' => 3.00],
            ['id' => 3, 'order_number' => 'ORD-104', 'order_date' => '2025-10-01', 'status' => 'completed', 'total_amount' => 3.75],
        ]);

        // Order Items
        $this->db->table('order_items')->insertBatch([
            ['order_id' => 1, 'item_id' => 1, 'size' => null,   'price' => 2.50, 'qty' => 1, 'total' => 2.50],
            ['order_id' => 2, 'item_id' => 1, 'size' => null,   'price' => 1.50, 'qty' => 1, 'total' => 1.50],
            ['order_id' => 3, 'item_id' => 1, 'size' => 'Small','price' => 3.75, 'qty' => 1, 'total' => 3.75],
        ]);

        // Payments
        $this->db->table('payments')->insertBatch([
            ['order_id' => 1, 'amount' => 2.50, 'payment_method' => 'Card', 'status' => 'success'],
            ['order_id' => 2, 'amount' => 3.00, 'payment_method' => 'Cash', 'status' => 'success'],
            ['order_id' => 3, 'amount' => 3.75, 'payment_method' => 'Card', 'status' => 'success'],
        ]);
    }
}