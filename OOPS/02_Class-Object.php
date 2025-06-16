<!-- 
Q: What is Class?
Ans : A class is a blueprint for creating objects. It defines the properties and methods that objects of that class will have.

Q: What is Object?
Ans : An object is an instance of a class. It is a real-world entity that has properties and methods.
 
-->

<?php
class MathOperatiom{

    public $val = 2;

  function  sum($a=2,$b=1){
      echo $a + $b - $this->val;
    //   echo $a + $b ;
    }

   function multi($a,$b){
    echo $a*$b;
   }

}


$math = new MathOperatiom();
$math->sum(10,40);
echo "<br>";



// $math1 = new MathOperatiom();
// echo "<br>";
// $math1->sum();


?>