<!-- 
Q: What is Traits?
Ans : A trait is a collection of methods and properties that can be shared between classes. Traits are similar to mixins in other programming languages. 
-->

<?php

trait Company1{
    function totalEmploye(){
        echo "total empolye = 500 ";
    }

    function project(){
        echo "total project = 10 ";
    }
}
trait Company2{
    function totalOffice(){
        echo "total Office = 10 ";
    }
}

class childCompany{
    use Company1;
    use Company2;
}

$Comp = new childCompany();
$Comp->totalEmploye();
$Comp->totalOffice();
$Comp->project();

?>