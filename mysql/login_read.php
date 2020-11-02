<?php include 'database.php'; ?>
<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Database CRUD</title>
    <!-- <link rel="stylesheet" href="./includes/main.css"> -->
  </head>
  <body>
    <h4 style="padding:10px">Create New User?<a href="login_create.php" style="text-decoration: none;color:blue;"> Click Here</a> </h4>

    <table cellpadding='5' border="2">
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
      </tr>
    <?php
      displayData();
    ?>
    </table>
  <?php include './includes/footer.php';?>
