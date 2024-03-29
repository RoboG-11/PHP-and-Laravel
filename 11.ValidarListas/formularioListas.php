<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Validar formulario</title>
  <style>
    body {
      background-color: #264673;
      box-sizing: border-box;
      font-family: Arial;
    }

    form {
      background-color: white;
      padding: 10px;
      /*margin: 100px auto;*/
      width: 400px;
    }

    input[type=text],
    input[type=password] {
      padding: 10px;
      width: 380px;
    }

    input[type="submit"] {
      border: 0;
      background-color: #ED8824;
      padding: 10px 20px;
    }

    .error {
      background-color: #FF9185;
      font-size: 12px;
      padding: 10px;
    }

    .correcto {
      background-color: #A0DEA7;
      font-size: 12px;
      padding: 10px;
    }

    .contenedor {
      height: 90vh;
      margin: 2%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <form action="#" method="POST">
      <?php

      $nombre = "";
      $password = "";
      $email = "";
      $pais = "";

      if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $pais = $_POST["pais"];

        $campos = array();

        if ($nombre == "") {
          array_push($campos, "El campo Nombre no pude estar vacío");
        }

        if ($password == "" || strlen($password) < 6) {
          array_push($campos, "El campo Password debe de tener al menos de 6 caracteres.");
        }

        if ($email == "" || strpos($email, "@") === false) {
          array_push($campos, "Ingresa un correo electrónico válido.");
        }

        if ($pais == "") {
          array_push($campos, "Selecciona un país de origen");
        }

        if (count($campos) > 0) {
          echo "<div class='error'>";
          for ($i = 0; $i < count($campos); $i++) {
            echo "<li>" . $campos[$i] . "</i>";
          }
        } else {
          echo "<div class='correcto'>
							Datos correctos";
        }
        echo "</div>";
      }
      ?>
      <p>
        Nombre:<br />
        <!--Lo de php es para "guardar" los datos en dado caso de error-->
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
      </p>

      <p>
        Password:<br />
        <input type="password" name="password">
      </p>

      <p>
        correo electrónico:<br />
        <input type="text" name="email" value="<?php echo $email ?>">
      </p>

      <p>
        País de origen: <br>
        <select name="pais" id="">
          <option value="">Selecciona un país</option>
          <!--El if es para "guardar" los valores-->
          <option value="mx" <?php if ($pais == "mx") echo "selected" ?>>México</option>
          <option value="eu" <?php if ($pais == "eu") echo "selected" ?>>Estados Unidos</option>
          <option value="es" <?php if ($pais == "es") echo "selected" ?>>España</option>
          <option value="ar" <?php if ($pais == "ar") echo "selected" ?>>Argentina</option>
          <option value="ch" <?php if ($pais == "ch") echo "selected" ?>>Chile</option>
        </select>
      </p>

      <p><input type="submit" value="enviar datos"></p>
    </form>
  </div>
</body>

</html>
