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