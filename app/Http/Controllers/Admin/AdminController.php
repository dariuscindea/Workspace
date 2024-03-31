<?php

include_once __DIR__ . '/../../../../system/Core/Controller/BaseController.php';

class AdminController extends BaseController
{
    public function index(): void
    {
        $projects = Project::query()->latest()->limit(15)->select(['*'])->get();

        include_once __DIR__ . '/../../../../resources/views/admin/index.php';
    }

    public function store(): void
    {
        $filename = str_replace(' ', '', basename($_FILES['image']['name']));
        $dir = "public/assets/projects/images";
        $tempFile = "$dir/$filename";

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        $isUploaded = move_uploaded_file($_FILES['image']['tmp_name'], $tempFile);

        Project::query()->insert([
            'name' => $_POST['name'], 'image' => "projects/images/$filename",
            'title' => $_POST['title'], 'description' => $_POST['description']
        ]);

        redirect(route('admin.index'));
    }

    public function edit(): void
    {
        include_once __DIR__ . '/../../../../resources/views/admin/index.php';
    }

    public function update(): void
    {
        include_once __DIR__ . '/../../../../resources/views/admin/index.php';
    }

    public function delete(): void
    {
        include_once __DIR__ . '/../../../../resources/views/admin/index.php';
    }
}