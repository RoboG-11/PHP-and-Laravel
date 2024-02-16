<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ciclos</title>
  <style>
    body {
      background-color: #e85f79;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  for ($i = 0; $i < 5; $i++) {
  ?>
    <img src="https://i.pinimg.com/originals/e6/54/43/e65443eb4f378839e6ac1d8bd48b2632.png" alt="Spider-man">
  <?php
    echo "<br>";
  }
  ?>

  <?php
  while (rand(1, 5) != 5) {
  ?>

    <img src="https://i.pinimg.com/originals/82/7f/4a/827f4a1699cf54b34a585bf91fc8df78.png" alt="Spider-man">
  <?php
    echo "<br>";
  }
  ?>
</body>

</html>
