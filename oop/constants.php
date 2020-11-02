<?php
  class Fixed {
    const MESSAGE = "Welcome Everybody..!!";
    public function greet() {
      echo static::MESSAGE;
    }
  }
  $test = new Fixed();
  $test->greet();

 ?>
