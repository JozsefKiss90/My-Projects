<?php
$cookie_name = "user";
$cookie_value = bin2hex(openssl_random_pseudo_bytes(4));
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

 
