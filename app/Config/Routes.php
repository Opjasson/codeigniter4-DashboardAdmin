<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// Route admin product
$routes->get('daftar-product', 'Admin\ProductController::index');