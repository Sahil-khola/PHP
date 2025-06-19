<!-- 
final keyword me hum class ko inherit karte nahi sakte 
-->
<?php

// final class honda{


// }

// class cars extends honda{


// }

// $car = new cars();


class honda
{
    final function companyName()
    {
        echo "Honda";
    }
}

class cars extends honda
{
    //  function companyName() {
    //     echo "Honda City";
    //  }
}

$car = new cars();
$car->companyName();
