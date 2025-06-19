<?php

trait company1{
    function totEmp(){
        echo 200;
    }
}
trait company2{
    function totEmp(){
        echo 300;
    }
}

class childCompany{
    use company1;
    use company2{
      company1::totEmp insteadof company2;
      company2::totEmp as totemp2;
    }
   
}

$childCompany = new childCompany();
$childCompany->totEmp();
$childCompany->totEmp2();

?>