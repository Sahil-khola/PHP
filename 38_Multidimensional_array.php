<!-- What is Multidimensional Array?
A multidimensional array is an array that contains other arrays. -->

<?php

$user = [
    [1,"Sahil Khola ","20","Php developer"],
    [2,"Sourav","22 ","Java developer"],
    [3,"Tanisq","24 ","Javascript developer"]
];

for ($i=0; $i < count($user); $i++) { 
    
    for ($j=0; $j < count($user[$i]); $j++) { 
        echo $user[$i][$j];
        echo "<br>";
    }
    echo "<hr>";
}

?>