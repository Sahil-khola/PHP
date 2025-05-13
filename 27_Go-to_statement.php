<!-- What is Go To Statement?
Go to statement is used to jump to a specific label. -->

 <?php

// $Age = 20;
// if ($Age==20) {
//     goto jump;
// }
// const name = 'Sahil khola';
// echo name;



// jump:
// echo "direct jump 9 to 16 line";


$a = 1;
while ($a <= 10) {
    if ($a==4) {
        goto outsideloop;
    }
    echo "$a <br>";
    $a++;
}

outsideloop:
echo "break the loop"
?>
 
