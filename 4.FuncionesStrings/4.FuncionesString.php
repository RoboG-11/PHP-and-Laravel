<?php
$mensaje = "Hoy voy a aprender mucho";

//longitud
echo strlen($mensaje);
echo "<br>";

//Número de palabras
echo str_word_count($mensaje);
echo "<br>";

//Reversa
echo strrev($mensaje);
echo "<br>";

//Encontrar texto
echo strpos($mensaje, "aprender");
echo "<br>";

//Reemplazar texto
echo  str_replace("aprender", "nadar", $mensaje);
echo "<br>";

//Convertir a minusculas
echo strtolower($mensaje);
echo "<br>";

//Convertir a mayúsculas
echo strtoupper($mensaje);
echo "<br>";

//Comparar cadenas
echo strcmp("hola", "adios");
echo "<br>";

//Substraer cadenas
echo substr($mensaje, 10); //Tambien se puede poner cuantos caracteres se quiere (x, y, z)
echo "<br>";

//Remover espacios en blanco
echo trim("    hola     soy       Brian");
