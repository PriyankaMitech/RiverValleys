<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('header', 'Home::Header');
$routes->get('footer', 'Home::Footer');
$routes->get('addtocart', 'Home::AddCart');
$routes->get('category', 'Home::Category');


$routes->post('sendotp', 'RegistrationController::sendOtp');
$routes->post('register', 'RegistrationController::register');

$routes->get('raiseaticket', 'Home::raiseaticket');
$routes->get('contact', 'Home::contact');


$routes->get('admindashboard', 'Home::admindashboard');

$routes->post('delete/(:any)/(:any)', 'Home::delete/$1/$1');
$routes->get('delete/(:any)/(:any)', 'Home::delete/$1/$1');

// Add Menu, set Menu and Get Menu List 
$routes->get('menulist', 'Home::get_menu_list');
$routes->get('editmenu/(:any)', 'Home::get_menu_list/$1');
$routes->post('setmenu', 'Home::setmenu');


// Add user, set user and Get user List 
$routes->get('userlist', 'Home::get_user_list');
$routes->get('edituser/(:any)', 'Home::get_user_list/$1');
$routes->post('setuser', 'Home::setuser');


// Add product, product  and product List 
$routes->get('addproduct', 'Home::addproduct');
$routes->post('setproduct', 'Home::setproduct');
$routes->get('editproduct/(:any)', 'Home::addproduct/$1');


// Add Local Brand, set Local Brand and Get Local Brand List 
$routes->get('localbrandlist', 'Home::get_localbrand_list');
$routes->get('editlocalbrand/(:any)', 'Home::get_localbrand_list/$1');
$routes->post('setlocalbrand', 'Home::setlocalbrand');





