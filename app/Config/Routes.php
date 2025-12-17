<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/card', 'Home::card');

$routes->get('/testloop', 'Home::testloop');
