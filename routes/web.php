<?php

include_once __DIR__ . '/../app/Http/Controllers/AppController.php';
include_once __DIR__ . '/../app/Http/Controllers/Admin/AdminController.php';
include_once __DIR__ . '/../app/Http/Controllers/Auth/AuthController.php';

return [

    // The Landing page.
    ['url' => '/', 'name' => 'index', 'controller' => AppController::class, 'action' => 'index', 'method' => 'get'],
    ['url' => '/login', 'name' => 'auth.login.show', 'controller' => AuthController::class, 'action' => 'showLogin', 'method' => 'get'],
    ['url' => '/login_', 'name' => 'auth.login', 'controller' => AuthController::class, 'action' => 'login', 'method' => 'post'],

    // Admin Area.
    ['url' => '/mysite/admin', 'name' => 'admin.index', 'controller' => AdminController::class, 'action' => 'index', 'method' => 'get', 'middleware' => IsAuthenticated::class],
    ['url' => '/mysite/admin/project/store', 'name' => 'admin.store', 'controller' => AdminController::class, 'action' => 'store', 'method' => 'post', 'middleware' => IsAuthenticated::class],
    ['url' => '/mysite/admin/project/edit', 'name' => 'admin.edit', 'controller' => AdminController::class, 'action' => 'edit', 'method' => 'get', 'middleware' => IsAuthenticated::class],
    ['url' => '/mysite/admin/project/update', 'name' => 'admin.update', 'controller' => AdminController::class, 'action' => 'update', 'method' => 'post', 'middleware' => IsAuthenticated::class],
    ['url' => '/mysite/admin/project/delete', 'name' => 'admin.delete', 'controller' => AdminController::class, 'action' => 'destroy', 'method' => 'get', 'middleware' => IsAuthenticated::class],
];
