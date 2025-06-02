<?php
$a = 10;
$b = 20;

echo $a+$b ."<br>";
// die;
echo $a-$b ."<br>";
echo $a*$b ."<br>";
// exit;
echo $a/$b ."<br>";

function test($a,$b){
    return $a+$b;
}

echo test(2,3);
?>