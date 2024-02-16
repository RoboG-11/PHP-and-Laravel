<?php
$dominio = "localhost";
$user = "root";
$password = "NegritO2001";

$conexion = new mysqli($dominio, $user, $password);

if($conexion-> connect_error){
  die("Conexión fallida: " .$conexion-> connect_error);
}

echo "Conexión exitosa...";
