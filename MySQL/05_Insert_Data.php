<form action="" method="post">
    <input type="text" name="name" placeholder="Enter name">
    <br>
    <input type="text" name="batch" placeholder="Enter batch">
    <br>
    <input type="text" name="city" placeholder="Enter city">
    <br>
    <input type="text" name="year" placeholder="Enter year">
    <br>
    <button type="submit"> Add student</button>
</form>


<?php
include("./00_config.php");
if (isset($_POST)) {
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    $student = $conn->prepare("
INSERT INTO information(name,batch,city,year)
VALUES('$name','$batch','$city','$year')
");
    $result = $student->execute();
    if ($result) {
        echo "data inserted";
    } else {
        echo "operation failed";
    }
}


?>