<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//crud group_project
$routes->get('Category', 'Category::viewCategory');
$routes->get('AddCategory', 'Category::index');
$routes->post('submit-form', 'Category::addCategory');
$routes->get('edit/(:num)', 'Category::showCategory/$1');
$routes->post('update', 'Category::update');
$routes->get('delete/(:num)', 'Category::delete/$1');

//crud km_unit
$routes->get('Name', 'Name::viewName');
$routes->get('AddName', 'Name::index');
$routes->post('submit-form2', 'Name::addName');
$routes->get('editName/(:num)', 'Name::showName/$1');
$routes->post('updateName', 'Name::updateName');
$routes->get('deleteName/(:num)', 'Name::deleteName/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
