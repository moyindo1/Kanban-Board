<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home');
$routes->get('/', 'Home::index');
$routes->get('Startseite', 'Home::index');
$routes->get('Tasks', 'Home::tasks');
$routes->get('Spalten', 'Home::spalten');
$routes->get('Boards', 'Home::boards');