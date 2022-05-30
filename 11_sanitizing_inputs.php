<?php

if (isset($_POST['submit'])) {
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

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

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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