<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rutas del login inicio original de la App
$routes->get('/', 'Home::index');
// Metodos del login
$routes->post('home/login', 'Home::login');


// Administracion General
$routes->get('/inventario/administrar', 'Home::administracion');


// Salir del proyecto
$routes->get('/logout', 'Home::logout');


// Rutas para Infantiles
$routes->get('/infantiles/listado_de_infantiles', 'Infantiles::Listado_Infantil');
$routes->get('/infantil/nuevo_infante', 'Infantiles::Agregar_Infantil');
$routes->get('/infantil/buscar_infante', 'Infantiles::Buscar_Infantil');