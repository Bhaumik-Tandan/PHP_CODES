<?php
class Car {
    public $name;
  public $color;
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function __construct($name,$color) {
    $this->name=$name;
    $this->color=$color;
  }
  function __destruct() {
    echo "\nThe car is {$this->name} of {$this->color} color.";
  }
  function foo()
  {
      echo "[Your Name]";
      echo "[Your ID]";
  }
}
class Mercedes extends Car {
    const NUMBER="AND1023";
    public static $weight=89;
    function foo()
  {
      echo "\nMercedes [Your Name]";
      echo "\nMercedes [Your ID]";
  }
  }
  $m = new Mercedes("Mercedes Benz","blue");
  $m->foo();
  echo "\n" . Mercedes::NUMBER;
  echo Mercedes::$weight;
?>
