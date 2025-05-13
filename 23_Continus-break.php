<!-- What is break in loop?
Ans : The break statement is used to exit a loop.

what is continue in loop?
Ans : The continue statement is used to skip one iteration of a loop.
 -->


<?php
for ($i=0; $i<=10 ; $i++) { 
    echo $i;
    echo '<br>';
    if ($i==4) {
        break;
    }
}
?>