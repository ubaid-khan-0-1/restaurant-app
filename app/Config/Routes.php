<?php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('cart', 'CartController::index');
$routes->get('orders', 'OrdersController::index'); // Web Orders Page

// API Group for Postman Task
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
    $routes->get('orders', 'OrderController::index');
});