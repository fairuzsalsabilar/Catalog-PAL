<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
// $routes->get('/index', 'Pages::index');
$routes->add('/input', 'Pages::input');
$routes->add('/editBerkas/(:segment)', 'Pages::editBerkas/$1');
$routes->post('/update/(:segment)', 'Pages::update/$1');
// $routes->get('/delete/(:segment)', 'Pages::delete/$1');
$routes->get('/delete/(:segment)', 'Pages::delete/$1');
// $routes->delete('/(:num)', 'Pages::delete/$1');
$routes->post('/save', 'Pages::save');
// $routes->get('/page', 'Pages::index/$1');
$routes->get('/home', 'Pages::home');
// $routes->get('/input', 'Pages::input');
// $routes->post('/pages(:segment)', 'Pages::input/$1');
$routes->get('/caripengguna', 'Pages::caripengguna');
// $routes->get('/login', 'Pages::login');
$routes->get('/crud', 'Pages::crud');
$routes->get('/login', 'Login::login');
$routes->post('/login', 'Login::login');
// $routes->get('/search', 'Login::search');
// $routes->post('/search', 'Login::search');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
