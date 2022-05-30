<?php
  setcookie('name', 'mohi', time() + 86400);

  if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
  }
?>