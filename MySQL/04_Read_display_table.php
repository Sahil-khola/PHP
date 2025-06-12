<?php
include '00_config.php';

$students = $conn->prepare("select * from information");
$students->execute();

// echo "<pre>";
// print_r($students->fetchall());
// echo "</pre>";
echo "<table border = '2'>";
foreach($students as $student){
    echo "<tr>
     <td>{$student['name']}</td>
     <td>{$student['batch']}</td>
     <td>{$student['year']}</td>
     </tr>";
     
}
echo "</table>";
?>