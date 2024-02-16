<!DOCTYPE html>

<html>

<head>
  <meta charset="URF-8">
  <title>Arreglos</title>
  <style>
    body {
      background-color: #b5cde6;
      font-family: Arial;
      font-size: 45px;
      padding: 50px;
    }
  </style>
</head>

<body>
  <?php
  $frutas = array("platanos", "manzanas", "uvas", "fresas");
  print_r($frutas);

  echo "<br>";
  echo $frutas[1];

  echo "<br>";
  echo count($frutas) . " elementos en el array";


  echo "<br>";
  for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
  }

  $edades = array("Brian" => 22, "Tania" => 23, "Omar" => 27);
  print_r($edades);
  echo "<br>";
  echo "Edad de Tania: " . $edades["Tania"];
  echo "<br>";

  foreach ($edades as $key => $value) {
    echo $key . " tiene el valor de " . $value . "<br>";
  }
  ?>
</body>

</html>
