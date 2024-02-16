<?php
//Se incluye el archivo php que contiene las clases Auto y AgenciaAutos
//"AgenciaAutos01.php"
//Dado que es un archivo local, de su interpretación se encargará
//el archivo que lo incluyó. 
include("AgenciaAutos01.php");

//Creación de 3 objetos instancias de la clase Auto
$auto1 = new Auto("Nissan", "Sentra", "2022", 350000);
$auto2 = new Auto("Nissan", "Altima", "2023", 520000);
$auto3 = new Auto("Nissan", "Maxima", "2023", 680000);

//Creación de un objeto instancia de la clase AgenciaAutos
$agenciaNissan = new AgenciaAutos("Suprema Nissan", "Avenida Santa Fe 482", "Telef. 5558455050");

//Se agregan tres objetos instancias de la clase Auto
//al objeto instancia de la clase AgenciaAutos
$agenciaNissan->agregarAuto($auto1);
$agenciaNissan->agregarAuto($auto2);
$agenciaNissan->agregarAuto($auto3);

//Se invoca el método mostrarInformación()
//el cual visualiza todos los autos disponibles
//en la agencia
$agenciaNissan->mostrarInformacion();
