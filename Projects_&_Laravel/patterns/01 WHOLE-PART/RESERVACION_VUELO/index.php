<?php
//Se incluyen los archivos php que contiene las clases ReservacionDeVuelo,
//ItinerarioVuelo, DatosPasajero y DatosPago
//Dado que son archivos locales, de su interpretación se encargará
//el archivo que los incluyó. 
include("ReservacionDeVuelo.php");
include("ItinerarioVuelo.php");
include("DatosPasajero.php");
include("DatosPago.php");

//Creación de un objeto instancia de la clase ItinerarioVuelo
$itinerarioVuelo = new ItinerarioVuelo("IB2042", "México", "Madrid", "30-05-2023", "12:10");

//Creación de un objeto instancia de la clase DatosPasajero
$datosPasajero = new DatosPasajero("González Pérez", "Pedro Pablo", "30-06-1968", "M", "5546789024", "ppgp@gmail.com");

//Creación de un objeto instancia de la clase DatosPago
$datosPago = new DatosPago("4356789023414320", "González Pérez", "Pedro Pablo", "12/2024", "896", "24,680.00");

//Creación de un objeto instancia de la clase Contenedor ReservacionDeVuelo
//la cual recibirá las Partes itinerario, datosPasajero y datos Pago
$reservacionDeVuelo = new ReservacionDeVuelo($itinerarioVuelo, $datosPasajero, $datosPago);

//Se invoca el método mostrarInformación()
//el cual visualiza toda la información de la reservación de vuelo
$reservacionDeVuelo->mostrar_InfoReservacion();
