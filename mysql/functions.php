<?php include 'database.php'; ?>
<?php
  function displayData() {
    global $connection;
    $query = "SELECT * FROM user_details";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('Query Failed'. mysqli_error());
    }
    if ($result-> num_rows > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" .$row['id'] ."</td><td>" .$row['username'] ."</td><td>" .$row['email'] ."</td><td>" .$row['phone'] ."</td></tr>" ;
      }
      echo "</table>";
    }
    else {
      echo "No Records Found";
    }

  }

  function showAllData() {
    global $connection;
    $query = "SELECT * FROM user_details";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die('Query Failed'. mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option> ";
    }
  }

  function updateTable() {
    global $connection;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "UPDATE user_details SET username = '$name', email = '$email', ";
    $query .= "password = '$password', phone = '$phone' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query Failed" . mysqli_error($connection));
    }
    else {
      header('location: login_read.php');
    }
  }
  function deleteRow() {
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM user_details";
    $query .= " WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query Failed" . mysqli_error($connection));
    }
    else {
        header('location: login_read.php');
    }
  }

 ?>
