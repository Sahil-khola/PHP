<?php
if ($_FILES) {
    echo "<pre>";
    print_r($_FILES['uploadFile']);
    echo "</pre>";


    $path = $_FILES['uploadFile']['name'];
    echo $path;
}
