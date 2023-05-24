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
$routes->get('/tables', 'Home::tables');

$routes->group('panel', static function ($routes) {
    $routes->get('', 'Panel::index');

    $routes->group('helpers', static function ($routes) {
        $routes->get('', 'Helpers::index', ['filter' => 'permission:manage-site']);
        $routes->post('(:segment)', 'Helpers::save/$1', ['filter' => 'permission:manage-site']);
        $routes->put('(:segment)/(:num)', 'Helpers::save/$1/$2', ['filter' => 'permission:manage-site']);
        $routes->delete('(:segment)/(:num)', 'Helpers::delete/$1/$2', ['filter' => 'permission:manage-site']);
    });

    $routes->group('lembaga', static function ($routes) {
        $routes->get('', 'ProfileLembaga::index', ['filter' => 'permission:manage-site']);
        $routes->put('', 'ProfileLembaga::update', ['filter' => 'permission:manage-site']);
    });

    $routes->group('user', static function ($routes){
        $routes->get('', 'Users::index', ['filter' => 'permission:manage-accounts']);
        $routes->get('create', 'Users::create', ['filter' => 'permission:manage-accounts']);
        $routes->get('edit/(:num)', 'Users::edit/$1', ['filter' => 'permission:manage-accounts']);
        $routes->post('save', 'Users::save', ['filter' => 'permission:manage-accounts']);
        $routes->put('save/(:num)', 'Users::save/$1', ['filter' => 'permission:manage-accounts']);
        $routes->delete('(:segment)', 'Users::delete/$1', ['filter' => 'permission:manage-accounts']);
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
