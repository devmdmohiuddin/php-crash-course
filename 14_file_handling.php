<?php

  $file = 'extras/users.txt';

  if (file_exists($file)) {
    // readFile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
  } else {
    $handle = fopen($file, 'w');
    $contents = 'Mohi' . PHP_EOL . 'Zaka';
    fwrite($handle, $contents);
    fclose($handle);
    echo $contents;
  }

?>