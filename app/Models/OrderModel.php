<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['order_number','order_date','status','total_amount'];


    public function getOrdersWithPayments($limit = 5)
    {
        return $this->select('orders.id, orders.order_number, orders.order_date, orders.status, orders.total_amount, payments.payment_method, payments.status as pay_status')
            ->join('payments', 'payments.order_id = orders.id', 'left')
            ->orderBy('orders.id', 'DESC')
            ->paginate($limit); 
    }
}