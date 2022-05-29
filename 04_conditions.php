<?php 

  $posts = [];

  if (!empty($posts)) {
    echo "Not Empty";
  } else {
    echo "Empty";
  }

  $num1 = 10;
  $num2 = 20;

  if ($num1 === $num2) {
    echo "${num1} & ${num2} is equal";
  } else {
    echo "${num1} & ${num2} is not equal";
  }
  // echo $num1 == $num2; 
  // echo $num1 > $num2;
  // echo $num1 < $num2;
  // echo $num1 <= $num2;
  // echo $num1 >= $num2;

?>
