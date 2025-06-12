<?php

$host = "localhost";
$username = "root";
$password = null;
$dbname = "college";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $conn->query("show tables")->fetchall();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
