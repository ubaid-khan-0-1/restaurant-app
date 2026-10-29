<?php
namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait; 

class OrderController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $db = \Config\Database::connect();

        // Single JOIN query — Performance: N+1 avoid
        $builder = $db->table('orders o')
            ->select('o.id, o.order_number, o.order_date, o.status, o.total_amount,
                      p.amount as paid_amount, p.payment_method, p.status as payment_status,
                      oi.item_id, oi.size, oi.price, oi.qty, oi.total as item_total,
                      i.item_name')
            ->join('payments p', 'p.order_id = o.id', 'left')
            ->join('order_items oi', 'oi.order_id = o.id', 'left')
            ->join('items i', 'i.item_id = oi.item_id', 'left')
            ->orderBy('o.id', 'ASC');

        $rows = $builder->get()->getResultArray();

        // Group by order
        $grouped = [];
        foreach ($rows as $row) {
            $id = $row['id'];
            if (!isset($grouped[$id])) {
                $grouped[$id] = [
                    'order_id'     => (int)$id,
                    'order_number' => $row['order_number'],
                    'order_date'   => $row['order_date'],
                    'status'       => $row['status'],
                    'total_amount' => $row['total_amount'],
                    'payment'      => [
                        'amount' => $row['paid_amount'],
                        'method' => $row['payment_method'],
                        'status' => $row['payment_status'],
                    ],
                    'items' => []
                ];
            }
            if ($row['item_id']) {
                $grouped[$id]['items'][] = [
                    'item_id'   => (int)$row['item_id'],
                    'item_name' => $row['item_name'],
                    'size'      => $row['size'],
                    'price'     => $row['price'],
                    'qty'       => (int)$row['qty'],
                    'total'     => $row['item_total'],
                ];
            }
        }

        return $this->respond([
            'status' => 200,
            'count'  => count($grouped),
            'data'   => array_values($grouped)
        ], 200);
    }
}