<div class="opcion">
  <?php
  $widthBar = $porcentaje * 5;
  $estilo = "barra";

  if ($survey->getOptionSelected() == $lenguaje['lenguaje']) {
    $estilo = "seleccionado";
  }

  echo $lenguaje['lenguaje'];

  ?>
  <div class="<?php echo $estilo; ?>" style="width: <?php echo $widthBar . 'px;' ?>"><?php echo $porcentaje . '%';  ?></div>

</div>
