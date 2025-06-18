<?php

class countrySale
{

    static public $totalsale = 1000;

    function getTotalSale()
    {
        self::$totalsale;
    }

    static function areaName()
    {
        echo "india";
    }

    function getareaName(){
        static::areaName();
    }
}



class citySale extends countrySale
{

    static public $totalsale = 50;
    static function areaName()
    {
        echo "pakistan";
    }
}

$city = new citySale();
$city->getareaName();
?>

