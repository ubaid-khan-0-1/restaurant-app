<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel; // Model import karein

class OrdersController extends BaseController
{
    public function index()
    {
        $model = new OrderModel();
        
        $data = [
            'orders' => $model->getOrdersWithPayments(5), // 5 orders per page
            'pager'  => $model->pager, // Pager instance view ko pass karein
        ];

        return view('orders', $data);
    }
}