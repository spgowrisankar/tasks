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
      echo "First_Name:" . $_SESSION['f_name'] . "<br>";
      echo "Role:" . $_SESSION['role'] . "<br>";
      print_r($_SESSION);
     ?>
  </body>
</html>
