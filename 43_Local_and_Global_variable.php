<!-- What is Local Variable?
Ans : A local variable is a variable that is only accessible within a function.

What is Global Variable?
Ans : A global variable is a variable that is accessible throughout the entire program.
 -->


<?php
$name = "Sahil khola";
function getName(){
    // $name = "Sahil";
    global $name;
    echo " local var : $name";
}

getName();
echo "<br>";
echo "Global var :$name";
?>