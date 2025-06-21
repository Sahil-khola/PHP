<?php
$host = "localhost";
$userName = "root";
$password = null;
$database = "college";

try {
    $conn = new Pdo("mysql:host=$host;dbname=$database", $userName, $password);
$conn->setAttribute(Pdo::ATTR_ERRMODE, Pdo::ERRMODE_EXCEPTION);
$ress = $conn->query("select * from information")->fetchAll();

} catch ( PDOException $err) {
   echo $err->getMessage();   
}

?>