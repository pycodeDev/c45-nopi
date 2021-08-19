<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::p_login');

// logout process
$routes->get('/logout', 'Home::p_logout');

$routes->get('/home', 'Admin\Dashboard::index', ['filter' => 'authFilter']);
$routes->get('/data', 'Admin\Data::index', ['filter' => 'authFilter']);
$routes->post('/data/upload', 'Admin\Data::p_upload', ['filter' => 'authFilter']);
$routes->post('/det_atr', 'Admin\Data::p_det', ['filter' => 'authFilter']);
$routes->post('/edit', 'Admin\Data::det_edit', ['filter' => 'authFilter']);
$routes->post('/data/edit', 'Admin\Data::p_edit', ['filter' => 'authFilter']);
$routes->get('/data/del', 'Admin\Data::p_del', ['filter' => 'authFilter']);
$routes->get('/cek', 'Admin\Cek::index', ['filter' => 'authFilter']);
$routes->get('/about', 'Admin\About::index', ['filter' => 'authFilter']);

$routes->post('/tes', 'Admin\Cek::tes');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
