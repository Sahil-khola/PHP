<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="" method="post">
     <input type="text" name="Name" id="Name">
     <br> <br>
     <button name="btn">Click</button>
    </form>
</body>
</html>

   <?php

use Soap\Url;

if(isset($_POST['Name'])){
    class UserName {
        function getName($name){
            echo "the user name is $name";
        }
    }
$name = new UserName();
$name->getName($_POST["Name"]);
}
    ?>