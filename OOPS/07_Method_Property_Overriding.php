<?php


class Teacher{
public $city = "<br>delhi ";

    function Exam(){
        echo "Next exam is maths";
    }

    function age(){
        echo " my age is 40";
    }
}

class students extends Teacher{
 public $city = "<br>grugram ";

     function age(){
        echo " my age is 18";
    }
}
$t1 = new Teacher;
$t1->age();
echo $t1->city;


// $s1 = new students();
// $s1->age();
// echo $s1->city;

?>