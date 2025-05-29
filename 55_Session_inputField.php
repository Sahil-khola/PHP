<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user_name" id="user_name" placeholder="Enter User Name">
        <br><br>
        <button name="set">Set Cookies</button>
        <br><br>
        <button name="display">Display</button>
        <br><br>
        <button name="delete">Delete</button>
    </form>
</body>

</html>

<?php

session_start();

if (isset($_POST['set'])) {
    $user_name = $_POST['user_name'];
    $_SESSION['user_name'] = $user_name;
}

if (isset($_POST['display'])) {
    echo $_SESSION['user_name'];
}


if (isset($_POST['delete'])) {
    unset($_SESSION['user_name']);
}


?>