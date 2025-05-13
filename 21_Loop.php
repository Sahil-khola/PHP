What is Loop?
A loop is a control structure that allows you to execute a block of code multiple times.

Types of Loop in PHP :
- For Loop
- While Loop
- Do While Loop
- Foreach Loop


<?php
for ($i=0; $i < 10; $i++) { 
    echo $i;
}
?>

<?php
$i=0;
while ($i < 10) {
    echo $i;
    $i++;
}
?>

<?php
$i=0;
do {
    echo $i;
    $i++;
} while ($i < 10);
?>

<?php
$colors = ['red','blue','green'];
foreach ($colors as $color) {
    echo $color;
}
?>
