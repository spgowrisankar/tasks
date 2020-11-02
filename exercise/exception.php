<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exception</title>
  </head>
  <body>
    <?php
      function heroFuntion($x,$y) {
        if ($y == 0 && $x % $y == 0) {
          throw new \Exception("Division By zero");
        }
        return $x/$y;
      }
      try {
          echo heroFuntion(2, 0);

      } catch (Exception $e) {
        echo "Unable To Process";
      }

    /*  function calFunction($a) {
        if ($a%2 == 0) {
          echo "Its even";
        }
        else {
          echo "Its odd";
        }
      }
      calFunction(7);
      */
     ?>
  </body>
</html>
