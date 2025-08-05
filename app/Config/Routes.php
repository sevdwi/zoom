<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Zoom::depan');
// $routes->get('/', 'Zoom::index', ['filter' => 'auth']);
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');
$routes->get('/zoom', 'Zoom::index', ['filter' => 'auth']);
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::doRegister');
$routes->get('/zoom/create', 'Zoom::create', ['filter' => 'auth']);
$routes->post('/zoom/store', 'Zoom::store', ['filter' => 'auth']);
$routes->get('/zoom/edit/(:num)', 'Zoom::edit/$1', ['filter' => 'auth']);
$routes->post('/zoom/update/(:num)', 'Zoom::update/$1', ['filter' => 'auth']);
$routes->post('/zoom/delete/(:num)', 'Zoom::delete/$1', ['filter' => 'auth']);
$routes->get('/zoom/export/pdf', 'Zoom::exportPdf');
// $routes->get('/zoom/export/excel', 'Surat::exportExcel');

// Memuat routes default dari sistem CodeIgniter
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}