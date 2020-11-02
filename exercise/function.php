<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Function</title>
  </head>
  <body>

<?php
  function bro($message, $number) {
    echo $message . " " . $number;
  }
  bro("hey_bro", 100);
  echo "<br>";
  function add($x, $y) {
    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
  }
  add(200,200);
 ?>

  </body>
</html>
