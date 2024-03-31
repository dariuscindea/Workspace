<?php

$routes = include_once __DIR__ . '/routes/web.php';

foreach ($routes as $route) {
    if (
        preg_replace('/\//', '', $route['url'], 1) ===
        preg_replace('/\//', '', $_SERVER['REQUEST_URI'], 1)
    ) {
        $instance = new $route['controller']();
        $instance->{$route['method']}();
    }
}