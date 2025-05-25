<!-- What is Super Global Variable?
A super global variable is a variable that is available throughout the entire script, even outside of functions.

Types of Super Global Variables in PHP :
- $_GET
- $_POST
- $_REQUEST
- $_COOKIE
- $_SESSION
- $_SERVER
- $_ENV -->

<?php

// include './35_Array.php';
$x = 35;

echo "<pre>";
// print_r($GLOBALS);
// print_r($_SERVER['REQUEST_URI']);
// print_r($_REQUEST);
print_r($_POST);
echo "</pre>";


?>