<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Encode y Decode</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div id="main-container">
    <form id="nuevo-pendiente-container" action="" method="POST">
      <p>
        Qué hacer <br>
        <input type="text" name="todo" id="todo">
      </p>
      <p>
        <input type="button" id="bEnviar" value="Añadir todo">
      </p>
    </form>
  </div>

  <div id="mostrar-todo-container">
  </div>

  <script src="main.js"></script>
  <script>
    cargarTodos();
  </script>
</body>

</html>
