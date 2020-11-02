<?php
  abstract class Company {
    public $name;
    public function __construct($name,$age) {
      $this->name = $name;
      $this->age = $age;
    }
    abstract public function bio() : string;
  }

  class Employee extends Company {

    public function bio() :string
    {
      return "hello this is $this->name and his age:$this->age";
    }
  }

$obj1 = new Employee("Raju",10);
echo $obj1->bio();
 ?>
