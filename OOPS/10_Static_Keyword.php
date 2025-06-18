<?php

class companyName
{
    static public $country = "<BR> JAPAN";
    static function honda()
    {
        echo "Honda";
    }
}

echo companyName::honda();
echo companyName::$country;
?>