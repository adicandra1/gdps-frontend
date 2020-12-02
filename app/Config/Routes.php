<?php namespace Config;

use CodeIgniter\Router\RouteCollection;

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
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

//jadi routes group ini maksudnya km bisa group route yang sejenis (misalkan: group landingPage ini),
//routes group ini base nya di url '/' yaitu: frontend.gdps.localhost/
$routes->group('/', function (RouteCollection $routes) {

	//ini route untuk function controller LandingPage home/index , url nya frontend.gdps.localhost/ 
    $routes->get('', 'LandingPage::index', ['as' => RoutesConstant::LANDINGPAGE_HOME]);

	//ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/about
    $routes->get('about', 'LandingPage::about', ['as' => RoutesConstant::LANDINGPAGE_ABOUT]);

	//ini route untuk function controller LandingPage services , url nya frontend.gdps.localhost/services
    $routes->get('services', 'LandingPage::services', ['as' => RoutesConstant::LANDINGPAGE_SERVICES]);

	//ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/gallery
    $routes->get('gallery', 'LandingPage::gallery', ['as' => RoutesConstant::LANDINGPAGE_GALLERY]);

	//dst dst
    $routes->get('news', 'LandingPage::news', ['as' => RoutesConstant::LANDINGPAGE_NEWS]);

    $routes->get('career', 'LandingPage::career', ['as' => RoutesConstant::LANDINGPAGE_CAREER]);

    $routes->get('contact', 'LandingPage::contact', ['as' => RoutesConstant::LANDINGPAGE_CONTACT]);
});

/**
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
