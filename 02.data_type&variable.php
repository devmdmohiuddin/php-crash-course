<?php 

  // varible
  $name = "Mohiuddin";

  $sum = 5 + 5;

  // single quote
  echo 'My name is ' . $name;
  echo "<br />";

  // double quote
  echo "My name is ${name}";
  echo "Practice";

  // const variable
  define('PI', 3.1416);

  echo PI;

  // DATA TYPE

  // string
  // integer
  // float
  // boolean
  // array
  // object
  // null
  // resource

  // sring
  $address = "Dhaka, Bangladesh";

  // integer
  $number = 100;

  // float
  $balance = 5.5;

  // boolean
  $x = true;
  $y = false;

  // array 
  $names = array("Mohi", "Zaka", "Mamun");
  var_dump($names);

  // object
  class Car {
    public $color;  
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }  

    public function message() {
      return "My car is a $this->color $this->model!";
    }
  }

  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

  // null
  $data = null;

?>