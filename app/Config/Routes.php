<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ======================== ADMIN ========================
$routes->group('admin', function($routes) {
    $routes->get('/', 'Auth::dashboard');

    // Tiket
    $routes->get('tiket', 'Admin\Tiket::index');
    $routes->get('tiket/create', 'Admin\Tiket::create');
    $routes->post('tiket/store', 'Admin\Tiket::store');
    $routes->get('tiket/edit/(:num)', 'Admin\Tiket::edit/$1');
    $routes->post('tiket/update/(:num)', 'Admin\Tiket::update/$1');
    $routes->get('tiket/delete/(:num)', 'Admin\Tiket::delete/$1');

    // Merchandise
    $routes->get('merchandise', 'Admin\Merchandise::index');
    $routes->get('merchandise/create', 'Admin\Merchandise::create');
    $routes->post('merchandise/store', 'Admin\Merchandise::store');
    $routes->get('merchandise/edit/(:num)', 'Admin\Merchandise::edit/$1');
    $routes->post('merchandise/update/(:num)', 'Admin\Merchandise::update/$1');
    $routes->get('merchandise/delete/(:num)', 'Admin\Merchandise::delete/$1');

    // Dashboard alternatif
    $routes->get('tiket-dashboard', 'Admin\Tiket::dashboard');
    $routes->get('merchandise-dashboard', 'Admin\Merchandise::dashboard');
    $routes->get('pembelian', 'Admin\Pembelian::index');
});

// ======================== AUTH ========================
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// ======================== USER SIDE / LANDING ========================
// HOME landing
$routes->get('landing/index', 'Home::index');

// Merchandise (user)
$routes->get('landing/merchandise', 'Home::merchandise');
$routes->get('landing/merchandise/(:num)', 'Home::detailMerchandise/$1');
$routes->get('landing/merchandise/(:num)/beli', 'Home::formPembelian/$1');
$routes->post('landing/pembelian/store', 'Home::simpanPembelian'); // dari form merch

// Tiket (user)
$routes->get('landing/tiket', 'Home::tiket');
$routes->get('landing/tiket/(:num)/beli', 'Home::formBeliTiket/$1');
$routes->post('landing/tiket/submit', 'Home::simpanTiket'); // dari form tiket



// Konfirmasi setelah beli
$routes->get('landing/konfirmasi', 'Home::konfirmasiPembelian');
$routes->get('landing/konfirmasi-tiket', 'Home::konfirmasiPembelianTiket');
