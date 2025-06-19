<!-- 
Q.What is Constructor?
Ans : A constructor is a special method that is automatically called when an object of a class is created. It is used to initialize the properties of the object.
 isme object bnane ki jrurat nhi pdti
-->

<?php

class Constrctor {
      
    public $name;
    function __construct($name){
        $this->name = $name;
    } 

    function display(){
       echo $this->name;
    }

}

$c1 = new Constrctor("Rao shabh");
$c1->display();

?>