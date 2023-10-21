<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::admin', ['filter' => 'authGuard']);
$routes->post('/signin', 'UserController::LoginAuth');
$routes->match(['get', 'post'], '/signup', 'UserController::register', ['filter' => 'authGuard']);
$routes->get('/logout', 'UserController::logout');
$routes->get('/login', 'UserController::login');