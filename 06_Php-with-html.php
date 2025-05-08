<?php

echo "<h1 style = color:green> Php with html</h1>";
echo '<center>Sahil khola</center>';

?>

<?php
$h2_color = 'red'; 
$name = "Sahil Khola";
echo "<h3 style = color:red>My name is $name </h3>";
?>

<h1 style="color: blueviolet; background-color: black;"><?php echo $name ?></h1>

<h2 style="color:<?php echo $h2_color?>"><?php echo "My name is $name"?></h2>
<h2 style="color:<?php echo $h2_color?>"><?php echo "My name is $name"?></h2>
<h2 style="color:<?php echo $h2_color?>"><?php echo "My name is $name"?></h2>
