<?php

class ConstDemo
{
    protected const collegeName = " WCTM ";

    function getCollegeName()
    {
        echo self::collegeName;
    }
}

class Name extends ConstDemo
{
    function getName()
    {
        echo ConstDemo::collegeName;
    }
}

// echo ConstDemo::collegeName;
// $const1 = new ConstDemo();
// $const1->getCollegeName();


$n1 = new Name();
$n1->getName();
