<?php

use App\Controller\Home;

// Default route
$routes->get('/', [Home::class, 'index']);

// Custom routes
$routes->get('about', [Home::class, 'about']);
$routes->get('students', [Home::class, 'students']);
