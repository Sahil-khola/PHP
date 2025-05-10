<!-- What is String operator?
String operator is used to concatenate two strings. -->

<!-- type of string operators in php are :

1. Dot String Operator
2. String Concatenation -->

<?php
$name = 'Sahil khola';
$age = 21;
$Profession = 'Php Developer';

// echo 'My name is '.$name.' and my age is '.$age.' i am php Developer'  // This is string concatenation and dot string operator

$str1 = 'Khola ';
$str2 = 'Sahil ';

$str1.=$str2;
// echo $str2.$str1;
echo $str1;
?>