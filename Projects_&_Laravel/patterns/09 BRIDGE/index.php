<?php
include "IReservacion_Itinerario.php";
include "AReservacion_Itinerario.php";
include "IReservacion_DPasajero.php";
include "AReservacion_DPasajero.php";
include "AReservacion_DPago.php";
include "IReservacion_DPago.php";

//Creación de un objeto Implementador instancia de la clase
//'IReservacion_Itinerario'
$iReservacion_Itinerario = new IReservacion_Itinerario();

//Creación de un objeto Abstracción instancia de la clase
//'AReservacion_Itinerario', el cual recibe como parámetro
//el objeto Implementador 'iReservacion_Itinerario'
$aReservacion_Itinerario = new AReservacion_Itinerario($iReservacion_Itinerario);
$aReservacion_Itinerario->reservar();
echo "<br>" . "PRUEBA DE EJECUCIÓN DE LA CLASE 'AReservacion_Itinerario'" . "<br>";
echo "Número de vuelo: " . $aReservacion_Itinerario->getNumeroVuelo() . "<br>";
echo "Origen: " . $aReservacion_Itinerario->getOrigen() . "<br>";
echo "Destino: " . $aReservacion_Itinerario->getDestino() . "<br>";
echo "Fecha: " . $aReservacion_Itinerario->getFecha() . "<br>";
echo "Hora: " . $aReservacion_Itinerario->getHora() . "<br>";
echo "Precio: " . $aReservacion_Itinerario->getPrecio() . "<br>";

//Creación de un objeto Implementador instancia de la clase
//'IReservacion_DPasajero'
$iReservacion_DPasajero = new IReservacion_DPasajero();

//Creación de un objeto Abstracción instancia de la clase
//'AReservacion_DPasajero', el cual recibe como parámetro
//el objeto Implementador 'iReservacion_DPasajero'
$aReservacion_DPasajero = new AReservacion_DPasajero($iReservacion_DPasajero);
$aReservacion_DPasajero->reservar();
echo "<br>" . "PRUEBA DE EJECUCIÓN DE LA CLASE 'AReservacion_DPasajero'" . "<br>";
echo "Apellidos: " . $aReservacion_DPasajero->getApellidos() . "<br>";
echo "Nombre: " . $aReservacion_DPasajero->getNombre() . "<br>";
echo "Fecha de nacimiento: " . $aReservacion_DPasajero->getFechaNacimiento() . "<br>";
echo "Sexo: " . $aReservacion_DPasajero->getSexo() . "<br>";
echo "Número de Telef. Celular: " . $aReservacion_DPasajero->getNumeroCelular() . "<br>";
echo "Dirección Email: " . $aReservacion_DPasajero->getDireccionEmail() . "<br>";

//Creación de un objeto Implementador instancia de la clase
//'IReservacion_DPago'
$iReservacion_DPago = new IReservacion_DPago();

//Creación de un objeto Abstracción instancia de la clase
//'AReservacion_DPago', el cual recibe como parámetro
//el objeto Implementador 'iReservacion_DPago'
$aReservacion_DPago = new AReservacion_DPago($iReservacion_DPago);
$aReservacion_DPago->reservar();
echo "<br>" . "PRUEBA DE EJECUCIÓN DE LA CLASE 'AReservacion_DPago'" . "<br>";
echo "Número de tarjeta: " . $aReservacion_DPago->getNumeroTarjeta() . "<br>";
echo "Apellidos del titular: " . $aReservacion_DPago->getApellidosTitular() . "<br>";
echo "Nombre del titular: " . $aReservacion_DPago->getNombreTitular() . "<br>";
echo "Fecha de vencimiento: " . $aReservacion_DPago->getFechaVencimiento() . "<br>";
echo "CVV: " . $aReservacion_DPago->getCvv() . "<br>";
echo "Cargo total: " . $aReservacion_DPago->getPrecioTotal() . "<br>";
