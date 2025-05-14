<!-- what is Function?
A function is a block of code that performs a specific task and can be reused multiple times in a program.

type of Function in PHP :
- User-defined Function
- Built-in Function
 -->

<?php

function Headline(){
    echo "<h1> User Details </h1>";
}
function UserDetails(){
$email = 'Sahilkhola7202@gmail.com'; 
Headline();   
    echo "name : Sahil Khola <br/>";
    echo "Age : 21 <br/>";
    echo "Phone : 95210114 <br>";
    echo "Email :  $email ";
    echo '<hr>';

}

UserDetails();
UserDetails();
UserDetails();
UserDetails();
UserDetails();

?>