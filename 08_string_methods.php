<?php

  $string = "Hello world";

  // Length of the string
  echo strlen($string) . '<br>';

  // String first position
  echo strpos($string, 'o') . '<br>';

  // String reverse position
  echo strrpos($string, 'o') . '<br>';

  // String reverse
  echo strrev($string) . '<br>';

  // String lowercase
  echo strtolower($string) . '<br>';

  // String uppercase
  echo strtoupper($string) . '<br>';

  // Capital letter of each word
  echo ucwords($string) . '<br>';

  // replace word
  echo str_replace('world', 'Everyone', $string) . '<br>';

  // sub string
  echo substr($string, 0, 5) . '<br>';
  echo substr($string, 0) . '<br>';

  // start with return true or false
  echo str_starts_with($string, 'He') . '<br>';

  // end with return true or false
  echo str_ends_with($string, 'ld') . '<br>';

  echo htmlspecialchars('<script>alert(1)</script>');

?>