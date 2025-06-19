<?php
include("student.php");
include("teacher.php");

$student = new student\JoiningDetails();
$student->admissionDate();
echo "<br>";
$techer = new teacher\JoiningDetails();
$techer->joiningDate();


?>