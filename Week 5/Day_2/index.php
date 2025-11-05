<?php
// Main entry file
require_once "routes.php";

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace("/week5/Day_2", "", $uri); // adjust base path

// Remove query strings
$uri = strtok($uri, '?');

if (isset($routes[$uri])) {
    [$controllerName, $method] = explode('@', $routes[$uri]);
    require_once "app/Controllers/$controllerName.php";
    $controller = new $controllerName();
    $controller->$method();
} else {
    http_response_code(404);
    echo "<h3>404 - Route Not Found</h3>";
}
