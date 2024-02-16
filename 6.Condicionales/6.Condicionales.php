<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Condicionales</title>
  <style>
    body {
      font-family: Arial;
      background: #bde85f;
    }

    div {
      background: white;
      padding: 20px;
      margin: 0 auto;
      width: 200px;
    }

    h1 {
      font-size: 36px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div>
    <?php
    $hora = 20;
    if ($hora > 6 && $hora < 12) {
      echo "<h1>Hola! buenos dias</h1>";
    } else if ($hora > 11 && $hora <= 7) {
      echo "<h1>Hola! buenas tardes</h1>";
    } else {
      echo "<h1>Hola! buenas noches</h1>";
    }
    ?>
  </div>
</body>

</html>
