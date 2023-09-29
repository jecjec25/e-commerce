<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chris', 'ProductController::chris');
$routes->get('/about', 'ProductController::about');
$routes->get('/contact', 'ProductController::contact');
$routes->get('/furniture', 'ProductController::furniture');
$routes->get('/shop', 'ProductController::shop');
