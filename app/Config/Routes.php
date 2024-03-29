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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('/simpanbuku', 'ControllerPerpustakaan::simpanBuku');
$routes->get('/', 'ControllerPerpustakaan::landingPage');
$routes->get('/pinjam/(:any)', 'ControllerPerpustakaan::pinjam/$1');
$routes->get('/kembalikanbuku/(:any)', 'ControllerPerpustakaan::kembalikanBuku/$1');
$routes->get('/account', 'ControllerPerpustakaan::signIn');
$routes->get('/libraryuser', 'ControllerPerpustakaan::libraryUser');
$routes->get('/libraryadmin', 'ControllerPerpustakaan::libraryAdmin');
$routes->get('/profile', 'ControllerPerpustakaan::profile');
$routes->get('/history', 'ControllerPerpustakaan::history');
$routes->get('/register', 'ControllerPerpustakaan::register');
$routes->get('/user', 'ControllerPerpustakaan::user');
$routes->get('/admin', 'ControllerPerpustakaan::admin');
$routes->get('/test', 'ControllerPerpustakaan::test');
$routes->get('/dashboard', 'ControllerPerpustakaan::dashboard');
$routes->get('/returnbook', 'ControllerPerpustakaan::returnbook');
$routes->get('/updatebuku/(:any)', 'ControllerPerpustakaan::updateBuku/$1');
$routes->get('/infobuku/(:any)', 'ControllerPerpustakaan::infoBuku/$1');

$routes->post('/signupuser', 'ControllerAkun::signUpUser');
$routes->post('/signupadmin', 'ControllerAkun::signUpAdmin');
$routes->post('/signin', 'ControllerAkun::signIn');
$routes->get('/masteradmin', 'ControllerAkun::masteradmin');
$routes->get('/admin', 'ControllerAkun::admin');
$routes->get('/user', 'ControllerAkun::user');
$routes->get('/delete/(:any)', 'ControllerAkun::delete/$1');
$routes->get('/logout', 'ControllerAkun::logout');
$routes->get('/validateUserAccount/(:any)', 'ControllerAkun::validateUserAccount/$1');

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
