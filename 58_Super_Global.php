<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<!-- file------->

    <!-- <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button name="upload">Upload</button>
    </form> -->


<!-- cookies_------>  
 <!-- <form action="" method="get">
    <input type="text" name="user" placeholder="enter your name">
    <br>
    <button name="set">set</button>
    <button name="display">display</button>
    <button name="delete">delete</button>
 </form> -->


 <!-- Session------------>
  <!-- <form action="" method="post">
    <input type="text" name="user" id="user" placeholder="enter user name">
    <br>
    <button name="set">set </button>
    <button name="display">display </button>
    <button name="delete">delete </button>
  </form> -->


</body>

</html>
<?php
// file------------>
// if ($_FILES){
//     $path = $_FILES["file"]["name"];
//     $uploadFile = "./upload/" . $path;
//     if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
//         echo "file is uploaded";
//     }
// }

 
// cookies-------->
// if (isset($_GET["set"])) {
//     $val = $_GET["user"];
//     setcookie("name",$val);
// }
// if (isset($_GET["display"])) {
//     echo $_COOKIE["name"];
// }
// if (isset($_GET["delete"])) {
//     setcookie("name","",-1);
// }


// session------->
// session_start();
// if(isset($_POST['set'])){
//     $val = $_POST["user"];
//     $_SESSION["name"] = $val;
// }
// if(isset($_POST['display'])){
//    echo $_SESSION["name"] ;
// }
// if(isset($_POST['delete'])){
//     unset($_SESSION["name"]);
// }

?>