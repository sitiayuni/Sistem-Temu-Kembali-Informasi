<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/publikasi', 'Home::publikasi');
$routes->get('/info', 'Home::info');
$routes->post('/search', 'Home::search');

