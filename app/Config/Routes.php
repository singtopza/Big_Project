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
$routes->setDefaultController('UserController');
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

// Customer
$routes->get('/', 'UserController::index');
$routes->get('/UserController', 'UserController::kickUserController');
$routes->get('/login', 'UserController::login');
$routes->get('/register', 'UserController::register');
$routes->get('/table', 'UserController::table_reservation');
$routes->get('/profile', 'UserController::profile');
$routes->get('/edit-form', 'UserController::editprofile');
$routes->get('/change-password', 'UserController::change_pass');
$routes->get('/policy', 'UserController::policy');

// Employee
$routes->get('/dashboard', 'EmployeeController::dashboard');
$routes->get('/EmployeeController', 'EmployeeController::kickEmployeeController');
$routes->get('/manage-van', 'EmployeeController::manage_van');
$routes->get('/manage-traffic', 'EmployeeController::manage_traffic');
$routes->get('/check-payment', 'EmployeeController::check_payment');

// Reservation
$routes->get('/reservation', 'ReservationController::reservation');
$routes->get('/ReservationController', 'ReservationController::kickReservationController');
$routes->get('/confirm-reservation', 'ReservationController::confirm_reservation');
$routes->get('/checking', 'ReservationController::check_reservation');

// Payment
$routes->get('/payment', 'PaymentController::payment');
$routes->get('/booking-details', 'PaymentController::booking_details');

// Van
$routes->get('/VanController', 'UserController::kickVanController');
$routes->get('/addvan', 'VanController::addvan');
$routes->get('/add-driving', 'VanController::add_driving');
$routes->get('/edit-driving', 'VanController::edit_driving');

// Report
$routes->get('/VanController', 'ComplaintController::kickComplaintController');
$routes->get('/report', 'ComplaintController::index');

// Ticket
$routes->get('/history', 'TicketController::his_reservation');

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
