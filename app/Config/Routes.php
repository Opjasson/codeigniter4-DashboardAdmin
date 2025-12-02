<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardController::index');

// Route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// Route admin product
$routes->get('daftar-product', 'Admin\ProductController::index');

// Route admin product kategori
$routes->get('daftar-kategori', 'Admin\ProductController::kategori');