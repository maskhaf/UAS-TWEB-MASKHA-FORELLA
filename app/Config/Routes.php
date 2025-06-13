<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->get('/', 'Home::index');
$routes->get('kontak', 'Home::kontak');
$routes->get('katalog', 'Home::katalog');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/create', 'Buku::create');
$routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('/buku/edit/(:num)', 'Buku::edit/$1');
$routes->get('/buku/delete/(:num)', 'Buku::delete/$1');
$routes->get('/anggota', 'Anggota::index');
$routes->get('/anggota/create', 'Anggota::create');
$routes->post('/anggota/create', 'Anggota::create');
$routes->get('/anggota/edit/(:num)', 'Anggota::edit/$1');
$routes->post('/anggota/edit/(:num)', 'Anggota::edit/$1');
$routes->get('/anggota/delete/(:num)', 'Anggota::delete/$1');
$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/create', 'Peminjaman::create');
$routes->post('/peminjaman/create', 'Peminjaman::create');
$routes->get('/peminjaman/kembali/(:num)', 'Peminjaman::kembali/$1');
$routes->get('/peminjaman/cetak', 'Peminjaman::cetak');

