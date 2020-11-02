<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $_SESSION["f_name"] = "gowrisankar";
    $_SESSION["role"] = "developer";
    $_SESSION["role"] = "Web-developer";
    echo "Session variable created";
     ?>
  </body>
</html>
