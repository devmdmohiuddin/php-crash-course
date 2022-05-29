<?php
  $posts = ['one post', 'second post', 'third post'];

  // for loop
  echo "<h1>For Loop: </h1> ";
  for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x] . '<br>';
  }

  // while loop
  echo "<h1>While Loop: </h1> ";
  $x = 0;
  while ($x < count($posts)) {
    echo $posts[$x] . '<br>';
    $x += 1;
  }

  // do while loop
  echo "<h1>Do While Loop: </h1> ";
  $x = 0;
  do {
    echo $posts[$x] . '<br>';
    $x += 1;
  } while ($x < count($posts));

  // for each 
  echo "<h1>Foreach Loop: </h1> ";
  foreach ($posts as $index => $post) {
    echo $index . ' - ' . $post . '<br>';
  } 

  // associative for each 
  echo "<h1>Associative Foreach Loop: </h1> ";
  foreach ($posts as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
  }
?>