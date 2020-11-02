<?php

  $cookie_name = "user";
  $cookie_value = "Gowri sankar";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
  
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
    <h1>Cookies</h1>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
      echo "The '" . $cookie_name . "' is not set" ;
    }
    else {
      echo "The '" . $cookie_name . "' is set!!<br>";
      echo "The value is:" . $_COOKIE[$cookie_name];
    }
     ?>
  </body>
</html>
