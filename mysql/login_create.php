<?php include 'database.php' ?>

<?php

  if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    if (empty($_POST['id']) || empty($_POST['name']) || empty($_POST['password']) ||
        empty($_POST['email']) || empty($_POST['phone'])) {
        die('Please fill all required fields!');
    }
    // preventing SQL Injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $phone = mysqli_real_escape_string($connection, $phone);
    // Password Encryption
    $hashFormat = "$2y$10$";
    $salt = "mandytechnologies123456";

    $hash_salt = $hashFormat . $salt;

    $encrypt_password = crypt($password, $hash_salt);

    $query = "INSERT INTO user_details(id, username, email, password, phone)";
    $query .= "VALUES ('$id', '$name', '$email', '$encrypt_password', $phone)";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query Failed'. mysqli_error());
    }
    else {
      header('location: login_read.php');
    }
  }
 ?>
<?php include './includes/header.php';?>
    <form class="main-form" method="post" action="login_create.php">
    <fieldset class="fieldset">
      <div class="form-control">
        <label for="id">User Id:</label>
        <input type="text" name="id">
      </div>
      <div class="form-control">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" >
      </div>
      <div class="form-control">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-control">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </div>
      <div class="form-control">
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone">
      </div>
      <div class="form-control">
      <input type="submit" name="submit" value="Submit">
      </div>
    </fieldset>
  </form>
  <h4 style="padding:10px">Back To Home-><a href="login_read.php" style="text-decoration: none;color:blue;"> Click Here</a> </h4>

<?php include './includes/footer.php';?>
