<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrdersController extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        
        $data = [
            'orders' => $model->getOrdersWithPayments(5), 
            'pager'  => $model->pager, 
        ];

        return view('orders', $data);
    }
}