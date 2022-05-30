<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo '<h1>Welcome ' . $_SESSION['username'] . '</h1>';
    echo '<a href="/phpproject/php_crush_course/extras/logout.php">Logout</a>';

  } else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/phpproject/php_crush_course/13_sessions.php">Home</a>';
    // header('Location: /phpproject/php_crush_course/13_sessions.php');
  }

?>