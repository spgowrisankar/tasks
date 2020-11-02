<?php
class User{

  public $value;

  public function set_value($value){
    $this->value = $value;
  }
  public function get_value() {
    return $this->value;
  }
  public function __construct() {
    // echo "Constructor Created";
  }
  public function register() {
    // echo "User Registered";
  }
  public function login($username,$password){
    echo $username." ".'is our user';
    echo "<br>";
    echo $password. 'is his password';
  }
  public function __destruct(){
      // echo "Destruct Created";
  }
}
$user = new User;
// $user->register();
// $user->login('Gowrisankar', '12345');
$user->set_value("Dev");
echo $user->get_value();
 ?>
