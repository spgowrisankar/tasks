<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Exercise</title>
  </head>
  <body>
    <?php
    $val_1 = 20.20;
    $val_2 = 100;
    echo $val_1;
    echo "<br>";
    var_dump($val_1);
    echo $val_2;
    echo "<br>";
    var_dump($val_2);
    echo "<br>";
    echo str_word_count("Hello world Hello world Hello world!");
    echo "<br>";
    echo strrev("Hello world Hello world Hello world!");
    echo "<br>";
    echo sqrt((64));
    $x = 1;
    do {
      echo "The Value is:$x <br>";
      $x++;
    } while ($x <= 5);
    function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
    }
    echo addNumbers(1.2, 5.2);
    echo "<br>";
    $numbers = array(4, 6, 2, 22, 11);
    echo "<br>";
    sort($numbers);
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
    }
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";

    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
?>
    ?>
  </body>
</html>
