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
    $routes->get('cetak-biodata', 'Panel::cetakBiodata');
    $routes->get('jadwal-ppdb', 'Panel::jadwal');
    $routes->get('settings', 'Users::accountSettings', ['filter' => 'permission:manage-profile']);

    $routes->group('validasi-registrasi', function ($routes){
        $routes->get('', 'ValidasiRegistrasi::index');
        $routes->post('konfirmasi', 'ValidasiRegistrasi::konfirmasi');
        $routes->post('tolak', 'ValidasiRegistrasi::tolak');
    });

    $routes->group('pembayaran', function ($routes) {
        $routes->get('', 'Pembayaran::index');
        $routes->post('', 'Pembayaran::save');
    });

    $routes->group('helpers', ['filter' => 'permission:manage-site'], static function ($routes) {
        $routes->get('', 'Helpers::index');
        $routes->get('status-ppdb/(:segment)', 'Helpers::status/$1');
        $routes->post('(:segment)', 'Helpers::save/$1');
        $routes->put('(:segment)/(:num)', 'Helpers::save/$1/$2');
        $routes->delete('(:segment)/(:num)', 'Helpers::delete/$1/$2');
    });

    $routes->group('materi', ['filter' => 'permission:manage-seleksi'], static function ($routes) {
        $routes->get('(:segment)', 'Materi::index/$1');
        $routes->put('(:segment)', 'Materi::save/$1');
        $routes->put('link/(:segment)', 'Materi::saveLink/$1');
    });

    $routes->group('hasil-seleksi', ['filter' => 'permission:manage-seleksi'], static function ($routes){
        $routes->get('(:segment)', 'HasilSeleksi::index/$1');
        $routes->put('', 'HasilSeleksi::save');
    });

    $routes->group('jadwal', ['filter' => 'permission:manage-site'], static function ($routes) {
        $routes->get('(:segment)', 'Jadwal::index/$1');
        $routes->post('(:segment)', 'Jadwal::save/$1');
        $routes->put('(:segment)/(:num)', 'Jadwal::save/$1/$2');
        $routes->delete('(:segment)/(:num)', 'Jadwal::delete/$1/$2');
    });

    $routes->group('pengumuman', static function ($routes) {
        $routes->get('', 'Pengumuman::index');
        $routes->post('', 'Pengumuman::save', ['filter' => 'permission:manage-site']);
        $routes->put('(:num)', 'Pengumuman::save/$1', ['filter' => 'permission:manage-site']);
        $routes->delete('(:num)', 'Pengumuman::delete/$1', ['filter' => 'permission:manage-site']);
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
