<!-- <?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (24*60*60));
?> -->
<!-- <?php
    $cookie_name = "user";
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?> -->
<!-- <?php
    $cookie_name = "user";
    setcookie($cookie_name, "", time() - 3600);
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?> -->
<?php
    $cookie_name = "promocja";
    $cookie_value = "wycieczka";
    setcookie($cookie_name, $cookie_value, time() + (2*24*60*60));
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>
<?php 
    $cookie_name = "promocja";
    setcookie($cookie_name, "", time() - 3600);
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
?>