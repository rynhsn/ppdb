<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
//$routes->setAutoRoute(true);
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
$routes->get('/', 'Home::index');
$routes->get('/daftar', 'Home::daftar');
$routes->post('/daftar', 'Home::saveDaftar');


$routes->group('panel', ['filter' => 'login'], static function ($routes) {
    $routes->get('', 'Panel::index');
    $routes->get('profile', 'Panel::profile');
    $routes->get('settings', 'Users::accountSettings', ['filter' => 'permission:manage-profile']);

    $routes->group('validasi-registrasi', function ($routes){
        $routes->get('', 'ValidasiRegistrasi::index');
    });

    $routes->group('pembayaran', function ($routes) {
        $routes->get('', 'Pembayaran::index');
        $routes->post('', 'Pembayaran::save');
    });

    $routes->group('helpers', ['filter' => 'permission:manage-site'], static function ($routes) {
        $routes->get('', 'Helpers::index');
        $routes->post('(:segment)', 'Helpers::save/$1');
        $routes->put('(:segment)/(:num)', 'Helpers::save/$1/$2');
        $routes->delete('(:segment)/(:num)', 'Helpers::delete/$1/$2');
    });

    $routes->group('lembaga', ['filter' => 'permission:manage-site'], static function ($routes) {
        $routes->get('', 'ProfileLembaga::index');
        $routes->put('', 'ProfileLembaga::update');
    });

    $routes->group('user', ['filter' => 'permission:manage-accounts'], function ($routes) {
        $routes->get('', 'Users::index');
        $routes->get('create', 'Users::create');
        $routes->post('', 'Users::save');
        $routes->get('edit/(:any)', 'Users::edit/$1');
        $routes->put('(:any)', 'Users::update');
        $routes->post('reset', 'Users::reset');
        $routes->post('setactive', 'Users::setActive');
        $routes->put('changegroup/(:num)', 'Users::changeGroup/$1');
        $routes->delete('(:segment)', 'Users::delete/$1');
    });

    $routes->group('calon-siswa', function ($routes) {
        $routes->get('', 'Siswa::index');
        $routes->get('delete/(:num)', 'Siswa::delete/$1');
        $routes->get('edit/(:num)', 'Siswa::edit/$1');
        $routes->put('update/(:num)', 'Siswa::update/$1');
    });
});

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
