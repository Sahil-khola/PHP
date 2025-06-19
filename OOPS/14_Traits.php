<!-- 
Q: What is Traits?
Ans : A trait is a collection of methods and properties that can be shared between classes. Traits are similar to mixins in other programming languages. 
-->

<?php

trait compny1{
    function totalempl(){
        echo 500;
    }

    function totalProject(){
        echo 15;
    }
}
trait compny2{
    function totaloffice(){
        echo 10;
    }
      function totalProject(){
        echo 5;
    }
}

class childCompany{
    use compny1, compny2 {
        compny2::totalProject insteadof compny1;
        compny1::totalProject as totalempl2;

    }
}

$childCompany = new childCompany();
// $childCompany->totalempl();
// $childCompany->totaloffice();
$childCompany->totalProject();
$childCompany->totalempl2();

?>