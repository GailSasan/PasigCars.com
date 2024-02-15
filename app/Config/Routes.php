<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'Home::about');

$routes->get('/contact', 'Home::contact');

$routes->get('/users', 'Home::users');
