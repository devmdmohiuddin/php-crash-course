<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $age = $_POST['age'];

  echo "${name} ${age}";
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

  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=mohi&age=28">click</a>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <label for="name"> Name
      </label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age"> Age
      </label>
      <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">

  </form>

</body>

</html>