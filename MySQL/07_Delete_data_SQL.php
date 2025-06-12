<?php
include("./00_config.php");
$getStudent = $conn->prepare("Select * from information");
$getStudent->execute();
$result = $getStudent->fetchAll();
echo "<table border = '1'>";
foreach ($result as $student) {
    echo "<tr>
 <td>{$student["name"]}</td>
 <td>{$student["batch"]}</td>
 <td>{$student["city"]}</td>
 <td>{$student["year"]}</td>
 <td>
    <form method='get'>
         <button name='delete' value={$student['id']}> Delete
          </button>
     </form>
 </td>
 </tr>";
}

echo "</table>";

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $getStudent = $conn->prepare("delete from information where id = $id");
    $getStudent->execute();
    echo $id;
}
?>
