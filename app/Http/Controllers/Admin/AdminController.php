<?php

include_once __DIR__ . '/../../../../system/Core/Controller/BaseController.php';

class AdminController extends BaseController
{
    public function index(): void
    {
        $projects = Project::query()->latest()->limit(15)->select(['*'])->get();

        view('admin/index', with: compact(['projects']));
    }

    public function store(): void
    {
        $filename = str_replace(' ', '', basename($_FILES['image']['name']));
        $dir = "public/assets/projects/images";
        $tempFile = "$dir/$filename";

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        move_uploaded_file($_FILES['image']['tmp_name'], $tempFile);

        Project::query()->insert([
            'name' => $_POST['name'], 'image' => "projects/images/$filename",
            'title' => $_POST['title'], 'description' => $_POST['description']
        ]);

        redirect(route('admin.index'));
    }

    public function edit(): void
    {
        $resourceId = $_GET['id'];

        $project = Project::query()->where(['id' => $resourceId])->select(['*'])->get();

        view('admin/edit', with: compact(['project']));
    }

    public function update(): void
    {
        $resourceId = $_POST['id'];

        $filename = str_replace(' ', '', basename($_FILES['image']['name']));
        $dir = "public/assets/projects/images";
        $tempFile = "$dir/$filename";

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        move_uploaded_file($_FILES['image']['tmp_name'], $tempFile);

        Project::query()->where(['id' => $resourceId])->update([
            'name' => $_POST['name'], 'image' => "projects/images/$filename",
            'title' => $_POST['title'], 'description' => $_POST['description']
        ]);

        redirect(route('admin.index'));
    }

    public function destroy(): void
    {
        $resourceId = $_GET['id'];

        Project::query()->where(['id' => $resourceId])->delete();

        redirect(route('admin.index'));
    }
}