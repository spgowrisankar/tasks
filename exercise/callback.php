<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function own_function($item){
      return strlen($item);
    }

    $arr = ["bat", "ball", "pad",];
    $lengths = array_map("own_function", $arr);
    print_r($lengths)
    ?>

  </body>
</html>
