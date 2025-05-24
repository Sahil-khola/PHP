<?php

$a = 100;
$a = (string) $a;
// var_dump($a);


$b = "300";
$b = (int) $b;
// var_dump($b);

$c = 2;
$c = (float) $c;
// var_dump($c);

$d = 'Abc';
$d = (boolean) $d;
// var_dump($d)

$e = 10;
$e = (array) $e;
array_push($e,"Sahil",'khola');
array_splice($e,-1);
var_dump($e);

?>