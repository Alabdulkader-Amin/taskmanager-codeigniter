<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Tasks::index');
$routes->get('/add', 'Tasks::add');
$routes->post('/add', 'Tasks::add');
$routes->get('/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/edit/(:num)', 'Tasks::edit/$1');
$routes->get('/delete/(:num)', 'Tasks::delete/$1');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');