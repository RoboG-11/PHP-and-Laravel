<?php
include_once "includes/survey.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alike&display=swap" rel="stylesheet">
  <title>Encuesta</title>
</head>

<body>
  <section class="center">
    <form action="#" method="POST">

      <?php
      $survey = new survey();
      $showResultes = false;

      if (isset($_POST["lenguaje"])) {
        $showResultes = true;
        $survey->setOptionSelected($_POST["lenguaje"]);
        $survey->vote();
      }

      ?>
      <h2>¿Cuál es tu lenguaje de programación favorito?</h2>

      <?php
      if ($showResultes) {
        $lenguajes = $survey->showResults();

        echo '<h3>' . $survey->getTotalVotes() . ' Votos totales</h2>';

        foreach ($lenguajes as $lenguaje) {
          $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);

          include 'vistas/vistaResultados.php';
        }
      } else {
        include 'vistas/vistaVotacion.php';
      }
      ?>

    </form>
  </section>

</body>

</html>
