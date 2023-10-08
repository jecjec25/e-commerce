<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chris', 'ProductController::chris', ['filter => authGuard']);
$routes->get('/about', 'ProductController::about');
$routes->get('/contact', 'ProductController::contact');
$routes->get('/furniture', 'ProductController::furniture');
$routes->get('/shop', 'ProductController::shop');
$routes->match(['get', 'post'], '/UserController/register', 'UserController::register');
$routes->get('/signUp', 'UserController::signUp');
$routes->get('/signin', 'SigninController::signIn');
$routes->match(['get', 'post'], '/SigninController/login', 'SigninController::login');
