<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

$conn = new mysqli($host,$username,$password,$database);
if ($conn->connect_error) {
    echo "failed to connect". $connect_error;
} else {
    echo "connection sucessful <br>";
}
$result = $conn->query("show tables")->fetch_all();
print_r($result);
echo json_encode($result);

?>