<!-- What is Cookies?
Cookies are small text files that are sent from a web server to a web browser and stored on the user's computer.

Cookies are used to store information about a user's preferences, such as their language, time zone, and other settings. -->


<!-- syntax of cookies
setcookie(name, value, expire, path, domain, secure, httponly);
 -->

 <?php
 
 setcookie("Name","Sahil khola",time()+(90000),'/');
 setcookie("color","Red",time()+(90000),'/');

 if (isset($_COOKIE['Name'])) {
    print_r($_COOKIE['Name']);
 } else {
    echo "No Cookies are found";
 }
 echo "<br>";
 if (isset($_COOKIE['color'])) {
    print_r($_COOKIE['color']);
 } else {
    echo "No color  are found";
 }
 
 
 ?>