<?php namespace Config;

use App\Views\ViewRoutesContract;
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
    $routes->get('', 'LandingPage::index', ['as' => ViewRoutesContract::LANDINGPAGE_HOME]);

	//ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/about
    $routes->get('about', 'LandingPage::about', ['as' => ViewRoutesContract::LANDINGPAGE_ABOUT]);

	//ini route untuk function controller LandingPage services , url nya frontend.gdps.localhost/services
    $routes->get('services', 'LandingPage::services', ['as' => ViewRoutesContract::LANDINGPAGE_SERVICES]);

	//ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/gallery
    $routes->get('gallery', 'LandingPage::gallery', ['as' => ViewRoutesContract::LANDINGPAGE_GALLERY]);

	//dst dst
    $routes->get('news', 'LandingPage::news', ['as' => ViewRoutesContract::LANDINGPAGE_NEWS]);

    $routes->get('career', 'LandingPage::career', ['as' => ViewRoutesContract::LANDINGPAGE_CAREER]);

    $routes->get('contact', 'LandingPage::contact', ['as' => ViewRoutesContract::LANDINGPAGE_CONTACT]);
});

$routes->group('/portal', [
        'namespace' => 'App\Controllers\Portal',
        'filter' => 'login'
    ], function (RouteCollection $routes) {
    //Default route
    $routes->get('', 'Auth::login');

    //Test Controllers
    $routes->environment('development', function(RouteCollection $routes) {
        $routes->get('test', 'Test::index', ['as' => ViewRoutesContract::TEST]);
    });

    // Login/out
    $routes->get('login', 'Auth::login', ['as' => ViewRoutesContract::LOGIN]);
    $routes->post('login', 'Auth::attemptLogin');
    $routes->get('logout', 'Auth::logout', ['as' => ViewRoutesContract::LOGOUT] );

    // Registration
    $routes->get('register', 'Auth::register', ['as' => ViewRoutesContract::REGISTER]);
    $routes->post('register', 'Auth::attemptRegister');

    // Activation
    $routes->get('activate-account', 'Auth::activateAccount', ['as' => ViewRoutesContract::ACTIVATE_ACCOUNT]);
    $routes->get('resend-activate-account', 'Auth::resendActivateAccount', ['as' => ViewRoutesContract::RESEND_ACCOUNT_ACTIVATION]);

    // Forgot/Resets
    $routes->get('forgot-password', 'Auth::forgotPassword', ['as' => ViewRoutesContract::FORGOT_PASS]);
    $routes->post('forgot-password', 'Auth::attemptForgot');
    $routes->get('reset-password', 'Auth::resetPassword', ['as' => ViewRoutesContract::RESET_PASS]);
    $routes->post('reset-password', 'Auth::attemptReset');

    //Dashboard
    $routes->get('dashboard', 'Dashboard::index', ['as' => ViewRoutesContract::PORTAL_DASHBOARD]);

    //Vacancy
    $routes->group('vacancy', function(RouteCollection $routes) {
        $routes->get('', 'Vacancy::index', ['as' => ViewRoutesContract::PORTAL_VACANCY]);

        $routes->get('test', 'Vacancy::test');

        $routes->get('detail/(:alphanum)', 'Vacancy::detail/$1', ['as' => ViewRoutesContract::PORTAL_VACANCY_DETAIL]);

        $routes->get('test', 'Vacancy::test');
    });

    //Profile
    $routes->group('profile', function(RouteCollection $routes) {
        $routes->get('', 'Profile::index', ['as' => ViewRoutesContract::PORTAL_PROFILE]);

        $routes->get('edit', 'Profile::edit', ['as' => ViewRoutesContract::PORTAL_PROFILE_EDIT]);

        $routes->get('skill-repo', 'Profile::skillRepo', ['as' => ViewRoutesContract::PROFILE_SKILL_REPO]);

        $routes->post('download-resume', 'Profile::downloadResume', ['as' => ViewRoutesContract::PORTAL_PROFILE_DOWNLOAD_RESUME]);

        $routes->get('print-resume', 'Profile::printResume', ['as' => ViewRoutesContract::PORTAL_PROFILE_PRINT_RESUME]);


        $routes->environment('development', function(RouteCollection $routes) {
            $routes->get('save', 'Profile::save');
        });

        $routes->post('save', 'Profile::save');
    });

    //Settings
    $routes->get('settings', function() {
        echo "This route is not yet implemented!";
    }, ['as' => ViewRoutesContract::PORTAL_SETTINGS]);
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
