<?php
if (isset($_GET['name'])) {
    echo "User name : ". $_GET["name"];
    echo "<br>";
    echo "User email : ". $_GET["email"];
    echo "<br>";
    echo "User password : ". $_GET["password"];
    echo "<br>";
    echo "User skill : ". implode(",",$_GET["skills"]);
    echo "<br>";
    echo "User Gender : " . $_GET["gender"];
    echo "<br>";
    echo "User city : " . $_GET["city"];
    echo "<br>";
    echo "User bio : " . $_GET["address"];
}
?>