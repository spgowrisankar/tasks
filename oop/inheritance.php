<?php
  class Developer {
    public $name;
    public $age;

    public function __construct($name,$age) {
      $this->name = $name;
      $this->age = $age;
    }
    // final public function details() {
    public function details() {
      echo "he is {$this->name} and his age:{$this->age}.";
    }
  }
  // $test = new Developer("Raju","20");
  // $test-> details();
  class Designer extends Developer {
    public $exp;
    public function __construct($name, $age, $exp) {
      $this->p1 = $name;
      $this->a1 = $age;
      $this->e1 = $exp;
    }
    public function details() {
      echo "he is {$this->p1} and his age:{$this->a1} and he have {$this->e1} years experience;";
    }
  }
  $test = new Designer("Ravi",35,6);
  $test1 = new Developer("Raju",20);
  $test->details();
  echo "<br>";
  $test1->details();
 ?>

 
