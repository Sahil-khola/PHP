<?php
include("./00_config.php");

$getStudent = $conn->prepare("insert into information(name,batch,city,year) values('Sahil khola', 'B.Tech', 'Pune', '2020')" ) ;
$getStudent->execute();
$data = $getStudent->fetchall();
echo "<pre>";
print_r($data); 
echo "</pre>";

?>