<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="InputField" id="InputField" placeholder="Enter User Name">
        <br><br>
        <button name="set">Set</button>
        <button name="display">Display</button>
        <button name="delete">delete</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['set'])) {
    $val = $_POST["InputField"];
    setcookie("name",$val);
}
if (isset($_POST['display'])) {
    echo $_COOKIE["name"];
}
if (isset($_POST['delete'])) {
    setcookie("name","",-1);
}

?>