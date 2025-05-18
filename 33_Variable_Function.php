<?php

function test(){
    echo "Test function......";
}
$val = "test";
echo $val();

function mainFunc($val){
    echo " main fuunction calling....";
    test();
    $val();
}

mainFunc($val);

?>