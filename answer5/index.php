<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer5</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <h2 align="center">User Details (From Database)</h2>

    <table align="center" class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Password</th>
            <th>Update</th>
        </tr>

        <?php

        include "config.php"; // Using database connection file here

        $records = mysqli_query($link, "SELECT * FROM users"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['age']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><a class="btn btn-danger" href="UpdateUser.php?id=<?php echo $data['id']; ?>">Update Password</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>