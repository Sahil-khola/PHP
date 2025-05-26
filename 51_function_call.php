<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="btn">Call Function</button>
    </form>
</body>
</html>

<?php
if (isset($_REQUEST['btn'])) {
onClick();
}

function onClick(){
    echo "function calling on click";
}

?>