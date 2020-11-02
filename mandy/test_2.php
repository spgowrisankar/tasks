<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Example-2</title>
  </head>
  <body>
    <?php
    $ticket = fopen("newfile.txt","w") or die("Cannot open the file");
    $word = "SuperStar";
    fwrite($ticket, $word);
    fclose($ticket);
     ?>
  </body>
</html>
