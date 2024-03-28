<?php

include_once __DIR__ . '/../../../system/Core/Asset/url.php';
include_once __DIR__ . '/../../../system/Core/Database/Connection.php';
include_once __DIR__ . '/../../Models/Project.php';
include_once __DIR__ . '/../../Models/Service.php';

$servicesOffered = Service::query()->select(['*'], ['section' => 'services_offered']);
$portfolios = Service::query()->select(['*'], ['section' => 'portfolios']/*, ['second_table' => 'projects', 'first_key' => 'id', 'second_key' => 'project_id']*/);

include_once __DIR__ . '/../../../resources/views/index.php';