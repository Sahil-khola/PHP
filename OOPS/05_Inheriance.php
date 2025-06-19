<!-- 
Q: What is Inheritance?
Ans : Inheritance is a mechanism in object-oriented programming that allows one class to inherit properties and methods from another class.
Inheritance ka use parent class ka method ya properties ko child class me use karne ke liye hota hai
-->

<?php

class userAuth
{
    function logIn($userType)
    {
        echo "$userType login..";
    }
}

class student extends userAuth
{

    function getName()
    {
        echo "Sahil khola";
    }
}

class teacher extends userAuth 
{
    function skills()
    {
        echo "DSA PYTHON PHP";
    }
}

$s1 = new student();
$s1->logIn("student");
echo "<br>";
$s1->getName();
echo "<br>";
$s2 = new teacher();
$s2->logIn("teacher");
echo "<br>";
$s2->skills();



?>