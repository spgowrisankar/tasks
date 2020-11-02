<?php
  if (isset($_GET['action'])) {
    $xml = simplexml_load_file('data.xml');
    $id = $_GET['id'];
    $index = 0;
    $i = 0;
    foreach ($xml->item as $value) {
      if ($value['id'] == $id) {
        $index = $i;
        break;
      }
      $i++;
    }
    unset($xml->item[$index]);
    file_put_contents('data.xml', $xml->asXML());
  }

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>xml</title>
  </head>
  <body>
    <form action='form.php' method='post'>
      <div class="form-control">
          <label for="id">User Id:</label>
          <input type="text" name="id">
        </div>
      <div class="form-control">
          <label for="name">Name:</label>
          <input type="text" name="name">
        </div>
        <div class="form-control">
          <label for="email">Email:</label>
          <input type="email" name="email" >
        </div>
        <div class="form-control">
          <label for="password">Password:</label>
          <input type="password" name="password">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
