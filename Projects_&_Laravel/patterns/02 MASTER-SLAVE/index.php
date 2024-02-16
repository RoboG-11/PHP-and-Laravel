<?php
//Se incluyen los archivos php que contiene las clases ReservacionDeVuelo,
//ItinerarioVuelo, DatosPasajero y DatosPago
//Dado que son archivos locales, de su interpretación se encargará
//el archivo que los incluyó. 
include("Master_ReservacionDeVuelo.php");
$infoReservacionDeVuelo = array();
//Creación de un objeto instancia de la clase Contenedor ReservacionDeVuelo
//en el caul se requiere la información del itinerario, la información
//del pasajero y la información del pago
$reservacionDeVuelo = new Master_ReservacionDeVuelo(1, 1, 1);
//Invocación de los Slaves para que ejecuten las subtareas asignadas
$infoReservacionDeVuelo = $reservacionDeVuelo->ejecucion_TareasReservacion();
//Ahora podemos recuperar del arreglo $reservacionDeVuelo la información
//del itinerario, datos del pasajero y datos de pago para que la 
//clase Cliente (index.php) haga el uso que requiera de los mismos
