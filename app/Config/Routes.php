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
$routes->get('admindashboard', 'Home::admindashboard');

$routes->post('delete/(:any)/(:any)', 'Home::delete/$1/$1');
$routes->get('delete/(:any)/(:any)', 'Home::delete/$1/$1');



// Add Menu, set Menu and Get Menu List 

$routes->get('menu-list', 'Home::get_menu_list');
$routes->get('edit-menu/(:any)', 'Home::get_menu_list/$1');

$routes->post('set_menu', 'Home::set_menu');




