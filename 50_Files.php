<?php
if ($_FILES) {
    $path = $_FILES['uploadFile']['name'];
    $upload_path = "./upload/" . $path;

    echo "<br>";
    echo "$path";
    echo "<br>";
    echo "$upload_path";
    echo "<br>";

    if (move_uploaded_file($_FILES['uploadFile']['tmp_name'], $upload_path)) {
        echo "Upload file sucessfull";
    } else {
        die("no file found");
    }
} 
?>
