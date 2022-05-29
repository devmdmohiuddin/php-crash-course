<?php

  // normal function
  function fullName ($name) {
    echo "My name is ${name} <br>";
  }

  fullName("Md Mohiuddin");

  // arror function 
  $sum = fn($x, $y) => $x + $y;

  echo $sum(10, 20);

?>