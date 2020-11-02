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
      $value = [20,77,1,6,5,3,464,8];
      sort($value);
      print_r($value);
      echo "<br>";
      echo max($value) . "<br>";
     ?>
  </body>
</html>
