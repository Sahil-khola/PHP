<?php
$path = "upload";
$items = scandir($path);
$items = array_diff($items,array(".",".."));
// print_r($items);

foreach($items as $item){
    echo "<a href=./upload/$item>$item</a><br>";
}

?>