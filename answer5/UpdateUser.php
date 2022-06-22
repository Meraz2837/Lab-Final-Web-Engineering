<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($link, "SELECT * FROM users WHERE id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $password = $_POST['password'];

    $edit = mysqli_query($link, "UPDATE users SET password='$password' WHERE id='$id'");

    if ($edit) {
        mysqli_close($link); // Close connection
        header("location:index.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error($link);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Update User</title>

</head>

<body class="bg-dark">



    <div class="text-center text-white">
        <h3>Update Data</h3>

        <h2>Change password for: <span class="text-success"><?php echo $data['name'] ?></span></h2>
        <form method="POST">
            <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter Password" Required>
            <br><input class="btn btn-danger my-3 btnw" type="submit" name="update" value="Update">
        </form>
    </div>

</body>

</html>