<?php
  $fruits = ['banana', 'grape', 'water melon'];

  // array push
  array_push($fruits, 'apple');

  // array pop
  array_pop($fruits);

  // array shift
  array_unshift($fruits, 'orange');

    // array unshift
  array_unshift($fruits);

  // chunked array
  $chunked_array = array_chunk($fruits, 2);

  $a = [1, 2, 3];
  $b = [4, 5, 6];

  // array merge
  $merge = array_merge($a, $b);

  $names = ['mohi', 'zaka', 'faruk'];
  $ages = [20, 30, 40];

  // array combine
  $combine = array_combine($names, $ages);

  // array key
  $keys = array_keys($combine);

  // array fliped
  $flipped = array_flip($combine);

  $numbers = range(1, 40);

  // array map
  $numberMaping = array_map(function($number) {
    return "number ${number}";
  }, $numbers);

  // array filter
  $numberFilter = array_filter($numbers, fn($number) => $number < 10);

  // array reduce
  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

  print_r($sum);
  var_dump($sum);


?>