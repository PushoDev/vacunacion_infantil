<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rutas del login inicio original de la App
$routes->get('/', 'Home::index');

// Administracion General
$routes->get('/inventario/administrar', 'Home::administracion');
