<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form-in-php</title>
    <link rel="stylesheet" href="./main.css">
  </head>
  <body>
  <?php
    $name = $email = $password = $gender = $phone = $address = "";
    $nameError = $emailError = $passwordError = $genderError = $phoneError = $addressError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $error = 0;
      if (empty($_POST["name"])) {
        $nameError = "Please Enter Your Name";
        $error = 1;
      }
      else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name )) {
          $nameError = "Please Enter The Valid Name";
          $error = 1;
        }
      }
      if (empty($_POST["email"])) {
        $emailError = "Please Enter Your Name";
        $error = 1;
      }
      else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          $error = 1;
        }
      }
      if (empty($_POST["password"])) {
        $passwordError = "Please Enter the Password";
        $error = 1;
      }
      else {
        $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) <= '6') {
          $passwordError = "Your Password Contain Atleast 6 Characters";
          $error = 1;
        }
      }
      // if (empty($_POST["gender"])) {
      //   $genderError = "Please Select Your Gender";
      //   $error = 1;
      // }
      // else {
      //   $gender = test_input($_POST["gender"]);
      // }
      if (empty($_POST["phone"])) {
        $phoneError = "Please Enter the Phone Number";
        $error = 1;
      }
      else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match('/^[0-9]{10}+$/', $phone)) {
          $phoneError = "Please Enter The Valid Number";
          $error = 1;
        }
      }
      // if (empty($_POST["address"])) {
      //   $addressError = "Please Enter Your Address";
      //   $error = 1;
      // }else {
      //     $address = test_input($_POST["address"]);
      // }

      if($error == 0) {
          $users = simplexml_load_file('user.xml');
          $user = $users->addChild('user');
          // $user->addAttribute('id', $_POST['id']);
          $user->addChild('name', $_POST['name']);

          $user->addChild('email', $_POST['email']);
          $user->addChild('password', $_POST['password']);
          $user->addChild('phone', $_POST['phone']);
          file_put_contents('user.xml', $users->asXML());
      }
    }
    function test_input($item) {
      $item = trim($item);
      $item = stripslashes($item);
      $item = htmlspecialchars($item);
      return $item;
    }
   ?>
    <h2 class="heading">PHP-Form</h2>
    <form class="main-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
      <fieldset class="fieldset">
        <div class="form-control">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) { echo htmlentities ($_POST['name']); }?>">
          <span class="error"><?php echo $nameError;?></span>
        </div>
        <div class="form-control">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) { echo htmlentities ($_POST['email']); }?>">
          <span class="error"> <?php echo $emailError;?></span>
        </div>
        <div class="form-control">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" >
          <span class="error"> <?php echo $passwordError;?></span>
        </div>
        <div class="form-control check">
          <label for="gender">Gender:</label>
          <input type="radio" name="gender" value="male" id="radio_1" <?php if (isset($gender) && $gender=="male") echo "checked";?>>
          <label for="radio_1">Male</label>
          <input type="radio" name="gender" value="female" id="radio_2" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
          <label for="radio_2">Female</label>
          <input type="radio" name="gender" value="others" id="radio_3" <?php if (isset($gender) && $gender=="others") echo "checked";?>>
          <label for="radio_3">Others</label>
          <span class="error"> <?php echo $genderError;?></span>
        </div>
        <div class="form-control">
          <label for="phone">Phone:</label>
          <input type="tel" name="phone" id="phone" value="<?php if(isset($_POST['phone'])) { echo htmlentities ($_POST['phone']); }?>">
          <span class="error"> <?php echo $phoneError;?></span>
        </div>
        <div class="form-control">
          <label for="address">Address:</label>
          <textarea name="address" rows="4" cols="40" id="address"><?php if(isset($_POST['address'])) {
         echo htmlentities ($_POST['address']); }?></textarea>
          <span class="error"> <?php echo $addressError;?></span>
        </div>
        <div class="form-control">
        <input type="submit" name="submit" value="Submit">
        </div>
      </fieldset>
    </form>
    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $address;
     ?>
  </body>
</html>
