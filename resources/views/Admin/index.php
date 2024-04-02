<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"], textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .crud-container {
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }
        .border {
            border: 1px solid gray;
        }

        .p-5 {
            padding: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<h2>Projects</h2>

<div class="crud-container">
    <h3>Add project</h3>
    <form id="crud-form" action="<?php echo route('admin.store')?>" method="post" enctype="multipart/form-data">
        <label>
            <input type="text" name="name" placeholder="Name" required>
        </label>
        <label>
            <input type="text" name="title" placeholder="title" required>
        </label>
        <label>
            <input type="file" name="image" placeholder="image" required>
        </label>
        <label>
            <textarea name="description" placeholder="Description" rows="4" required></textarea>
        </label>
        <input type="submit" value="Add Record">
    </form>
</div>

<div class="crud-container border p-5">
    <h3>Projects:</h3>
    <table id="records-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($projects ?? [] as $key => $project) {
                echo "<tr>
                    <td>$key</td>
                    <td>$project[0]</td>
                    <td>$project[1]</td>
                    <td>$project[3]</td>
                    <td>$project[4]</td>
                    <td><img src='".assets($project[2])."' alt='.$project[1]' style='width: 30px; height: 30px'> </td>
                    <td>$project[6]</td>
                    <td>
                    <button style='background: cornflowerblue; color: white; border-radius: 4px'><a href='". route("admin.edit") ."?id=$project[0]' style='background: cornflowerblue; color: white; border-radius: 4px'>Edit</a></button> 
                    <a href='". route("admin.delete") ."?id=$project[0]' style='background: red; color: white; border-radius: 4px'>Delete</a>
                    </td>
                    "
                    .'</tr>';
            }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
