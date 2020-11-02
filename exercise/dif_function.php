<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>
  <body>

<?php
   function addition($value1, $value2) {
     $add = $value1 + $value2;
     return $add;
   }
    $element = addition(20, 20);
    echo $element . "<br>";

    $element1 = addition(100, $element);
    echo $element1 . "<br>";

    define('name', 'raju');
    // name = "ravi";
    echo name . '<br>';

    echo rand(1,100) . '<br>';


 ?>

  </body>
</html>
