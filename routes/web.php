<?php

include_once __DIR__ . '/../app/Http/Controllers/AppController.php';
include_once __DIR__ . '/../app/Http/Controllers/Admin/AdminController.php';

return [
    ['url' => '/', 'name' => 'index', 'controller' => AppController::class, 'method' => 'index'],
    ['url' => '/mysite/admin', 'name' => 'admin.index', 'controller' => AdminController::class, 'method' => 'index'],
];
