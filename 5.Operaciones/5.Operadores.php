<?php
$x = 5;
$y = 10;

//NOTE: Aritmeticas
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//NOTE: Asignación
$x = $y;
$x += $y;

$x -= $y;

$x *= $y;

//NOTE: Comparación
var_dump($x == $y); //Compara los valores no importa el tipo de dato
echo "<br>";

var_dump($x === $y); //Compara el valor junto al tipo de dato
echo "<br>";

var_dump($x < $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";

var_dump($x <> $y); //Diferentes
echo "<br>";

var_dump($x !== $y); //No es identico
echo "<br>";

//NOTE: Incremento-decremento
$x = 5;
$y = 10;

echo $x++; //Postincremento
echo "<br>";
echo $x;
echo "<br>";

echo ++$x; //Preincremento. También existe el predecremento y postdecremento
?>
