<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'Home::about');

$routes->get('/contact', 'Home::contact');

$routes->get('/users', 'Home::users');

$routes->get('/user/(:num)', 'Home::user/$1');

$routes->get('/deluser/(:num)', 'Home::deluser/$1');


$routes->get('/new', 'Home::new');
$routes->post('/newUser', 'Home::newUser');

$routes->get('/update/(:num)', 'Home::updateUserInfo/$1');
$routes->post('/updateUser', 'Home::updateUser');