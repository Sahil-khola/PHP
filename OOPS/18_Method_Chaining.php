<!-- 
Q:what is Method Chaining?
A:Method chaining is a technique in object-oriented programming where multiple method calls are chained together to form a sequence of operations on an object. 
-->

<?php

class company{
    function getName(){
     echo "The Company name is Honda. ";
     return $this;
    }
    function getEmployee(){
     echo "The Company have 2000 Employee. ";
     return $this;
    }
    function getOffice(){
     echo "The Company have 200 Office. ";
     return $this;
    }
}
$company = new company();
// $company->getName();
// $company->getEmployee();
// $company->getOffice();

$company->getName()->getEmployee()->getOffice();


?>