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
