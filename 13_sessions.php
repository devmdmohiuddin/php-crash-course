<?php

session_start();

if (isset($_POST['submit'])) {

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  if ($name == 'mohi' && $password == 'password') {
    $_SESSION['username'] = $name;

    header('Location: /phpproject/php_crush_course/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label for="name"> Name
      </label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="password"> Password
      </label>
      <input type="password" name="password">
    </div>

    <input type="submit" value="Submit" name="submit">

  </form>

</body>

</html>