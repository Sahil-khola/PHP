<?php
// $host = "localhost";
// $username = "root";
// $password = null;
// $database = "college";

// try{
// $conn = new PDO("mysql:host=$host;dbname = $database", $username,$password);
// $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "Connection done <br>";
// }
// catch(PDOException $error){
//  echo "connection failed". $error->getMessage();
// }

// $conn = new mysqli($host,$username,$password,$database);
// if($conn->connect_error){
//     echo "connection failed". $connect_error;
// }else{
//     echo "connection done";
// }




$host = "localhost";
$username = "root";
$password = null;
$database = "college";

// try {
//     $conn = new PDO("mysql:host=$host;dbname=$database",$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "connection done";
//     $result = $conn->query("show tables")->fetchAll();

//     print_r($result);
// } catch (ErrorException $error) {
//    echo "connection failed <br>".$error->getMessage();
// }

$conn = new mysqli($host,$username,$password,$database);
if ($conn->connect_error) {
    echo" connection failed" . $connect_error;
} else {
    echo"connection done";
    $result = $conn->query("show tables")->fetch_all();
    print_r($result);
}

?>
