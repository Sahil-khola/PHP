<!-- 
Q. What is an abstract class?
Ans : we declare methods but write implementation in child class 
-->
<?php

abstract class Car
{
    abstract function carOil();
    abstract function gearBox();
}

class honda extends Car{
    function carOil()
    {
        echo "car oil is filled..";
    }

    function gearBox()
    {
        echo "gear box ready..";
    }
}

$honda = new honda();
$honda->carOil();
$honda->gearBox();

?>