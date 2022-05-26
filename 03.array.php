<?php 

  // index array
  $names = array("Hasan", "Kabir", "Maruf");

  $fruits = ["Bananna", "Orange", "Apple"];

  $fruitsLength = count($fruits);
  for($i = 0; $i < $fruitsLength; $i++) {
    echo "<h3>$fruits[$i]</h3>";
  }

  // associative array
  $ages = ["mohi" => "27", "hasan" => "28", "zaka" => "27"];

  foreach ($ages as $x => $x_value) {
    echo "<p>${x} ${x_value}</p>";
  }

  // multiple array
  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

echo $cars[3][2];
