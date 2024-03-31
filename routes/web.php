<?php

include_once __DIR__ . '/../app/Http/Controllers/AppController.php';
include_once __DIR__ . '/../app/Http/Controllers/Admin/AdminController.php';

return [

    // The Landing page.
    ['url' => '/', 'name' => 'index', 'controller' => AppController::class, 'action' => 'index', 'method' => 'get'],

    // Admin Area.
    ['url' => '/mysite/admin', 'name' => 'admin.index', 'controller' => AdminController::class, 'action' => 'index', 'method' => 'get'],
    ['url' => '/mysite/admin/project/store', 'name' => 'admin.store', 'controller' => AdminController::class, 'action' => 'store', 'method' => 'post'],
    ['url' => '/mysite/admin/project/edit', 'name' => 'admin.index', 'controller' => AdminController::class, 'action' => 'edit', 'method' => 'get'],
    ['url' => '/mysite/admin/project/update', 'name' => 'admin.index', 'controller' => AdminController::class, 'action' => 'update', 'method' => 'post'],
    ['url' => '/mysite/admin/project/delete', 'name' => 'admin.index', 'controller' => AdminController::class, 'action' => 'destroy', 'method' => 'delete'],
];
