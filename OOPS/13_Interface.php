What is Interface?
Ans : An interface is a blueprint for a class. It defines a set of methods that a class must implement.
<?php

interface productFeature
{
    function makeEngine();
    function makeGearBox();
}

class Product implements productFeature
{
    function makeEngine()
    {
        echo "engine complete";
    }
    function makeGearBox()
    {
        echo "Gear box complete";
    }
}

$Product = new Product();
$Product->makeEngine();

?>