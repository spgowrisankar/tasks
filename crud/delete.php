<?php include 'database.php'; ?>
<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  $query = "DELETE FROM user_details WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query Failed" . mysqli_error($connection));
  }
  else {
      header('location: display.php');
  }
}

 ?>
