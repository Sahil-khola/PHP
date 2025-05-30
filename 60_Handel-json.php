<?php
// $user = ["name" => "sahil khola", "age" => "20", "profession" => "php developer"];
// echo json_encode($user);
$users = '{"name" : "sahil khola", "age" : "20", "profession" : "php developer"}';
$usersArray = json_decode($users,true);
print_r($usersArray);
?>