<!DOCTYPE html>
<html>
  <body>
    <?php
      $name = "";
      $email = "";
      $password = "";
      $gender = "";
      $phone = "";
      $address = "";
      $nameError = $emailError = $passwordError = $genderError = $phoneError = $addressError = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $gender = test_input($_POST["gender"]);
        $phone = test_input($_POST["phone"]);
        $address = test_input($_POST["address"]);
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameError = "Please Enter Your Name";
        }
        else {
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name )) {
            $nameError = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["email"])) {
          $emailError = "Please Enter Your Name";
        }
        else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }
      }

      function test_input($item) {
        $item = trim($item);
        $item = stripslashes($item);
        $item = htmlspecialchars($item);
        return $item;
      }
      echo "$name";
      echo "<br>";
      echo "$email";
      echo "<br>";
      echo "$password";
      echo "<br>";
      echo "$gender";
      echo "<br>";
      echo "$phone";
      echo "<br>";
      echo "$address";
      // $name = $_POST['name'];
      // $email= $_POST['email'];
      // $password = $_POST['password'];
      // echo "Name:" . $name . "<br>";
      // echo "Email:" . $email . "<br>";
      // echo "Password:" . $password . "<br>";
     ?>
  </body>
</html>
