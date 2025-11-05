<?php
require_once "app/Middleware/AuthCheck.php";

$auth = new AuthCheck();

$routes = [
    '/'           => 'Home@index',
    '/about'      => 'Home@about',
    '/students'   => 'Student@list',
    '/login'      => 'Auth@login',
    '/logout'     => 'Auth@logout',
];

// Example middleware usage
if ($auth->handle($_SERVER['REQUEST_URI'])) {
    // Authenticated route (for demo)
    $routes['/dashboard'] = 'Home@dashboard';
}
