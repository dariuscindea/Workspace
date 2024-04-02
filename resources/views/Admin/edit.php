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
    <h3>Edit project</h3>
    <form id="crud-form" action="<?php echo route('admin.update') ?>" method="post" enctype="multipart/form-data">
        <label>
            <input name="id" hidden="hidden" value="<?php echo $project[0][0]; ?>">
        </label>
        <label>
            <input type="text" name="name" placeholder="Name" value="<?php echo $project[0][1]; ?>" required>
        </label>
        <label>
            <input type="text" name="title" placeholder="title" value="<?php echo $project[0][3]; ?>" required>
        </label>
        <label>
            <input type="file" name="image" placeholder="image" value="<?php echo $project[0][2]; ?>" required>
        </label>
        <label>
            <textarea name="description" placeholder="Description" rows="4"
                      required><?php echo $project[0][4]; ?></textarea>
        </label>
        <input type="submit" value="Save Record">
    </form>
</div>
</body>
</html>
