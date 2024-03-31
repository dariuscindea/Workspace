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
            margin-top: 20px;
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
    <form id="crud-form" action="process.php" method="post">
        <label>
            <input type="text" name="name" placeholder="Name" required>
        </label>
        <label>
            <textarea name="description" placeholder="Description" rows="4" required></textarea>
        </label>
        <input type="submit" value="Add Record">
    </form>
</div>

<div class="crud-container">
    <h3>Projects:</h3>
    <table id="records-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- Records will be displayed here -->
        </tbody>
    </table>
</div>

<script>
    // This is a placeholder for fetching and displaying records from a database
    // You can replace this with actual JavaScript code to fetch records from your backend and display them in the table
    // For simplicity, I'm just adding a dummy record here
    var dummyRecord = {
        name: "Sample Record",
        description: "This is a sample record for demonstration purposes."
    };

    // Function to add a new record to the table
    function addRecord(record) {
        var table = document.getElementById("records-table").getElementsByTagName('tbody')[0];
        var newRow = table.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        cell1.innerHTML = record.name;
        cell2.innerHTML = record.description;
        cell3.innerHTML = '<button onclick="editRecord()">Edit</button> <button onclick="deleteRecord()">Delete</button>';
    }

    // Function to populate the table with records
    function populateRecords() {
        // Clear existing rows
        document.getElementById("records-table").getElementsByTagName('tbody')[0].innerHTML = "";
        // Add dummy record
        addRecord(dummyRecord);
    }

    // Initial population of records
    populateRecords();
</script>

</body>
</html>
