<?php
include("./00_config.php");
$getStudent = $conn->prepare("select * from information");
$getStudent->execute();
$studentdata = $getStudent->fetchAll();


echo "<select>";

echo "<option> Select Name</option>";
foreach ($studentdata as $student) {
    echo "<option value = {$student["id"]}>. {$student["name"]}.</option>";
}

echo "</select>";
?>