<?php

$link = mysqli_connect("localhost", "root", "", "test_db");


if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

// Attempt insert query execution
$sql = "INSERT INTO users (name, age, password) VALUES ('$name', '$age', '$password')";
if (mysqli_query($link, $sql)) {
    echo "Registration Completes";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Done</title>
</head>
<body>
    <a style="text-decoration: none; padding: 5px; background-color: rgb(67, 67, 197); color:white;" href="index.html">Back to the form?</a>
</body>
</html>