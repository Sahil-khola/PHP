<form action="" method="post">  
    <input type="text" name="search" placeholder="Search">
    <button type="submit">Search</button>
</form>
<?php
include("./00_config.php");
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $getStudent = $conn->prepare("select * from information where name like '%$search%'");
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
         <td>
        <a href='./09_Update.php?id={$student["id"]}'>edit</a>
         </td>
         </tr>";
    }
    echo "</table>";
}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $getStudent = $conn->prepare("delete from information where id = $id");
    $getStudent->execute();
}

if(isset($_GET['update'])){
    $id = $_GET['update'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $getStudent = $conn->prepare("update information set name = '$name', batch = '$batch', city = '$city', year = '$year' where id = $id");
    $getStudent->execute();
}

?>