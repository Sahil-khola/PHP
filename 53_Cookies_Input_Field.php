<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="InputField" placeholder="Enter Name">
        <br><br>
        <button name="button" value="set">set Cookies</button>
        <br><br>
        <button name="button" value="display">Display Cookies </button>
        <br><br>
        <button name="button" value="delete">Delete Cookies</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['button'])) {
    if ($_GET['button'] == 'set') {
        $val = $_GET["InputField"];
        setcookie('name', $val);
        echo "Cookie set...";
    }
    if ($_GET['button'] == 'display') {
        echo $_COOKIE['name'];
    }
    if ($_GET['button'] == 'delete') {
        setcookie("name",'',-1);
    }
}

?>