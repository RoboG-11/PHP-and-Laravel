<?php
$servidor = "localhost";
$usuario = "root";
$password = "NegritO2001";
$db = "todolist";

$conexion = new mysqli($servidor, $usuario, $password, $db);

if ($conexion->connect_error) {
  die("Conexión fallida: " . $conexion->connect_error);
}

/*
$sql = "CREATE DATABASE TodoList";
if ($conexion->query($sql) === true) {
  echo "Base de Datos creada correctamente";
} else {
  die("Error de crear la base de datos: " . $conexion->error);
}
*/

$sql = "CREATE TABLE TodoTable(
  id INT(5) AUTO_INCREMENT PRIMARY KEY,
  texto VARCHAR(100) NOT NULL,
  completado BOOLEAN NOT NULL,
  timeStamp TIMESTAMP
)";

if ($conexion->query($sql) === true) {
  echo "La tabla se creó correctamente...";
} else {
  die("Error al crear la tabla: " . $conexion->error);
}
