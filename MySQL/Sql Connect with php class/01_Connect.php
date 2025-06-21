<?php
include("config.php");
class student{
    public $dbConn;
    function __construct($conn){
        $this->dbConn = $conn;
    }


    function getName(){
        $getStudent = $this->dbConn->prepare("select * from information");
        $getStudent->execute();
        $students = $getStudent->fetchAll();
        // print_r($students);
      echo "<table border = '4'>";
        foreach($students as $student){
           echo "<tr>
           <td>{$student['name']}</td>
           <td>{$student['batch']}</td>
           <td>{$student['city']}</td>
           <td>{$student['year']}</td>
           
           </tr>";
        }
      echo "<table>";

    }
}
$student = new student($conn);
$student->getName();
?>