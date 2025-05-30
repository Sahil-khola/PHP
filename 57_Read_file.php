<?php
$file = 'upload/khola.txt';
$myfile = fopen($file, 'r') or die("file cannot open");
echo fread($myfile, filesize($file));
fclose($myfile);
?>
