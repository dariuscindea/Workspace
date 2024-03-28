<?php

include_once __DIR__ . '/../../../system/Core/Asset/url.php';
include_once __DIR__ . '/../../../system/Core/Database/Connection.php';
include_once __DIR__ . '/../../Models/Project.php';
include_once __DIR__ . '/../../Models/Service.php';

$projects = Service::query()->select(['*'], ['section' => 'services_offered']);

include_once __DIR__ . '/../../../resources/views/index.php';


