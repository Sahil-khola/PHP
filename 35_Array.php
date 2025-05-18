<!-- What is Array?
Array is a data type that is used to store multiple values in a single variable. -->

<!-- Type of array
1. Indexed Array
2. Associative Array
3. Multidimensional Array -->


<?php

// $arr1 = array('Sahil','Sourav','Karan','Neeraj');
$arr1 = ['Sahil ','Sourav ','Karan ','Neeraj'];

// echo $arr1[0];
// echo $arr1[1];
// echo $arr1[2];
// echo $arr1[3];

for ($i=0; $i < count($arr1) ; $i++) { 
    echo $arr1[$i];
}
?>