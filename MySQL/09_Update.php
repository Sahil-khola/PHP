<?php
include("./00_config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getStudent = $conn->prepare("select * from information where id = $id");
    $getStudent->execute();
    $student = $getStudent->fetchAll();
    $name = $student[0]['name'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
    $year = $student[0]['year'];

}
?>
<form action="" method="post">
    <input type="text" value="<?php echo $name?> "name='name'>
    <br><br>
    <input type="text" value="<?php echo $batch?> "name='batch'>
    <br><br>
    <input type="text" value="<?php echo $city?> "name='city'>
    <br><br>
    <input type="text" value="<?php echo $year?> "name='year'>
    <br><br>
    <button value="<?php echo $id?>"> Update </button>
</form>
 