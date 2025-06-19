<!-- What is Type hinting?
Type hinting is a feature of PHP that allows you to specify the type of a variable when you declare it.
function ke ander perameter pass karte hai toh hum phele bta sakte h value ka data type kya hai
-->

<?php

class Fruit {
    function getName(string $name){
        echo $name;
    }
}

$c1 = new Fruit();
// $c1->getName(["apple"]);

?>