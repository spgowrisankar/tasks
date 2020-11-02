<?php

$id = $name = $email = $password = $phone = "";
$idError = $nameError = $emailError = $passwordError = $phoneError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $error = 0;
  if (empty($_POST["id"])) {
  $idError = "Please Enter Your Id";
  $error = 1;
  }
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
  }
  else {
    $password = test_input($_POST["password"]);
    if (strlen($_POST["password"]) <= '6') {
      $passwordError = "Your Password Contain Atleast 6 Characters";
      $error = 1;
    }
  }
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
  // if ($error == 1) {
  //   $globalerror = "Please fill the all values";
  //    echo $globalerror;
  // }

     $users = simplexml_load_file('user.xml');
     $user = $users->addChild('user');
     $user->addAttribute('id', $_POST['id']);
     $user->addChild('name', $_POST['name']);

     $user->addChild('email', $_POST['email']);
     $user->addChild('password', $_POST['password']);
     $user->addChild('phone', $_POST['phone']);
     file_put_contents('user.xml', $users->asXML());
     header('location: index.php');
   }

}
function test_input($item) {
  $item = trim($item);
  $item = stripslashes($item);
  $item = htmlspecialchars($item);
  return $item;
}

 ?>
