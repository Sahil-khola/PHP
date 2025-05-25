<?php
// What is the use of $_REQUEST in PHP?
// $_REQUEST is a PHP super global variable that is used to collect data from HTML forms.
// It can collect data using both GET and POST methods
// print_r($_REQUEST);
if($_REQUEST){
    $_REQUEST['Sahil khola']='new Name';
foreach ($_REQUEST as $key => $DATA) {
    echo $key ." is ".$DATA;
    echo "<br>";
}
}
?>