<?php

include_once __DIR__ . '/../../../system/Core/Controller/BaseController.php';

class AdminController extends BaseController
{
    public function index(): void
    {
        include_once __DIR__ . '/../../../../resources/views/admin/index.php';
    }
}