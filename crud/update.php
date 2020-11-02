<?php include 'database.php'; ?>
<?php
  if (isset($_POST['update'])) {
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
      echo "Record Updated Successfully";
      header('location: display.php');
    }
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM user_details WHERE  id = $id";

    $result = mysqli_query($connection, $query);

    if($result-> num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['username'];
          $email = $row['email'];
          $phone = $row['phone'];
        }
        ?>
        <link rel="stylesheet" href="main.css">
        <form method="post" action="">
        <fieldset class="fieldset">
          <div class="form-control">
            <label for="id">User Id:</label>
            <input type="text" name="id" value="<?php echo $id; ?>" readonly>
          </div>
          <div class="form-control">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>">
          </div>
          <div class="form-control">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-control">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>">
          </div>
          <div class="form-control">
          <input type="submit" name="update" value="Update">
          </div>
        </fieldset>
        </form>

        <?php
        }
        else {
          header('location: display.php');
        }
  }
 ?>
