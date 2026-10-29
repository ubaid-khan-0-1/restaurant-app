<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Menus: 1=Food, 2=Drinks
        $this->db->table('menus')->insertBatch([
            ['menu_id' => 1, 'menu_name' => 'Food'],
            ['menu_id' => 2, 'menu_name' => 'Drinks'],
        ]);

        // Categories
        $this->db->table('categories')->insertBatch([
            ['cat_id' => 1, 'cat_name' => 'Starters'],
            ['cat_id' => 2, 'cat_name' => 'Soft Drinks'],
            ['cat_id' => 3, 'cat_name' => 'Mains'],
            ['cat_id' => 4, 'cat_name' => 'Desserts'],
            ['cat_id' => 5, 'cat_name' => 'Hot Drinks'],
        ]);

        // Items (PDF Menu sheet se)
        $this->db->table('items')->insertBatch([
            ['item_id' => 1, 'item_name' => 'Item 1', 'cat_id' => 1, 'menu_id' => 1, 'size' => 'Small', 'price' => 1.50],
            ['item_id' => 2, 'item_name' => 'Item 2', 'cat_id' => 1, 'menu_id' => 1, 'size' => null,   'price' => 2.50],
            ['item_id' => 3, 'item_name' => 'Item 3', 'cat_id' => 2, 'menu_id' => 2, 'size' => null,   'price' => 2.50],
            ['item_id' => 4, 'item_name' => 'Item 4', 'cat_id' => 2, 'menu_id' => 2, 'size' => null,   'price' => 1.50],
            ['item_id' => 5, 'item_name' => 'Item 5', 'cat_id' => 2, 'menu_id' => 1, 'size' => null,   'price' => 1.00],
            ['item_id' => 6, 'item_name' => 'Item 6', 'cat_id' => 3, 'menu_id' => 1, 'size' => 'Large', 'price' => 3.60],
            ['item_id' => 7, 'item_name' => 'Item 7', 'cat_id' => 3, 'menu_id' => 1, 'size' => null,   'price' => 2.50],
            ['item_id' => 8, 'item_name' => 'Item 8', 'cat_id' => 4, 'menu_id' => 2, 'size' => 'Large', 'price' => 6.50],
            ['item_id' => 9, 'item_name' => 'Item 9', 'cat_id' => 4, 'menu_id' => 2, 'size' => null,   'price' => 1.50],
            ['item_id' => 10, 'item_name' => 'Item 10', 'cat_id' => 5, 'menu_id' => 2, 'size' => null, 'price' => 2.00],
        ]);
    }
}