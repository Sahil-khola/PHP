<?php

class Properties{

    public $name = "Rao shabh";

function getName(){
    echo $this->name;
}

function updateName($n1){
     $this->name = $n1;
}

}

$p1 = new Properties;
$p1->updateName("SAHIL KHOLA");
$p1->getName();




?>