<?php
include("./AEROLINEA/I_ReservacionVuelo.php");
include("./AEROLINEA/ReservacionVuelo_Itinerario.php");
include("./AEROLINEA/Decorador_ReservacionVuelo.php");
include("./AEROLINEA/DecoradorC_RV_InfoPasajero.php");
include("./AEROLINEA/DecoradorC_RV_InfoPago.php");

//Creación de un objeto instancia (Componente Concreto) 
//de la clase 'ReservacionVuelo_Itinerario'
$reservacionVuelo_ItinerarioVuelo = new ReservacionVuelo_Itinerario("IB2042", "México", "Madrid", "30-05-2023", "12:10");
//Visualización del Estado del Objeto 'itinerarioVuelo'
echo "<br>" . "DESCRIPCIÓN DEL OBJETO 'reservacionVuelo_ItinerarioVuelo'" . "<br>";
echo "Origen: " . $reservacionVuelo_ItinerarioVuelo->getOrigen() . "<br>";
echo "Destino: " . $reservacionVuelo_ItinerarioVuelo->getDestino() . "<br>";
echo "Fecha: " . $reservacionVuelo_ItinerarioVuelo->getFecha() . "<br>";
echo "Hora: " . $reservacionVuelo_ItinerarioVuelo->getHora() . "<br>";
echo "Número de Vuelo: " . $reservacionVuelo_ItinerarioVuelo->get_numeroVuelo() . "<br>";

//Creación de un objeto instancia (Decorador Concreto) 
//de la clase 'DecoradorC_RV_InfoPasajero', al cual debemos pasar como
//parámetro el objeto 'reservacionVuelo_ItinerarioVuelo' para que lo 
//envuelva con nueva funcionalidad relacionada con la información
//del pasajero
$decoradorC_RV_InfoPasajero = new DecoradorC_RV_InfoPasajero($reservacionVuelo_ItinerarioVuelo);

//Ahora completamos la inicialización del objeto 'decoradorC_RV_InfoPasajero'
//añadiendo la información del pasajero
$decoradorC_RV_InfoPasajero->setApellidos("González Pérez");
$decoradorC_RV_InfoPasajero->setNombre("Pedro Pablo");
$decoradorC_RV_InfoPasajero->setFechaNacimiento("30/06/1968");
$decoradorC_RV_InfoPasajero->setSexo("M");
$decoradorC_RV_InfoPasajero->setNumeroCelular("5510101010");
$decoradorC_RV_InfoPasajero->setDireccionEmail("pgonzalezp@gmail.com");

//Ahora verificaremos que realmente hemos construido un objeto Decorador Concreto
//que envuelve al objeto Componente Concreto, y le ha añadido nueva funcionalidad.
//Para ésto basta acceder y visualizar todo el estado del objeto 'decoradorC_RV_InfoPasajero'
echo "<br>" . "**********************************************************************";
echo "<br>" . "DESCRIPCIÓN DEL OBJETO 'decoradorC_RV_InfoPasajero'" . "<br>";
echo "INFORMACIÓN DEL PASAJERO" . "<br>";
echo "Apellidos: " . $decoradorC_RV_InfoPasajero->getApellidos() . "<br>";
echo "Nombre: " . $decoradorC_RV_InfoPasajero->getNombre() . "<br>";
echo "Fecha de nacimiento: " . $decoradorC_RV_InfoPasajero->getFechaNacimiento() . "<br>";
echo "Sexo: " . $decoradorC_RV_InfoPasajero->getSexo() . "<br>";
echo "Número telefónico: " . $decoradorC_RV_InfoPasajero->getNumeroCelular() . "<br>";
echo "Dirección Email: " . $decoradorC_RV_InfoPasajero->getDireccionEmail() . "<br>";
echo "INFORMACIÓN DEL ITINERARIO" . "<br>";
//Ahora obtenemos el objeto 'reservacionVuelo_ItinerarioVuelo'
//envuelto por el decorador 'decoradorC_RV_InfoPasajero'
//y visualizamos su estado
$itinerarioVuelo = $decoradorC_RV_InfoPasajero->getReservacionVuelo_Itinerario();
echo "Origen: " . $itinerarioVuelo->getOrigen() . "<br>";
echo "Destino: " . $itinerarioVuelo->getDestino() . "<br>";
echo "Fecha: " . $itinerarioVuelo->getFecha() . "<br>";
echo "Hora: " . $itinerarioVuelo->getHora() . "<br>";
echo "Número de Vuelo: " . $itinerarioVuelo->get_numeroVuelo() . "<br>";

//Creación de un objeto instancia (Decorador Concreto) 
//de la clase 'DecoradorC_RV_InfoPago', al cual debemos pasar como
//parámetro el objeto 'DecoradorC_RV_InfoPasajero' para que lo 
//envuelva con nueva funcionalidad relacionada con la información
//del pago
$decoradorC_RV_InfoPago = new DecoradorC_RV_InfoPago($decoradorC_RV_InfoPasajero);

//Ahora completamos la inicialización del objeto 'decoradorC_RV_InfoPago'
//añadiendo la información del pago
$decoradorC_RV_InfoPago->setNombreTitular("Pedro Pablo González");
$decoradorC_RV_InfoPago->setNumeroTarjeta("7280-5640-2576-1890");
$decoradorC_RV_InfoPago->setFechaVencimiento("08/2028");
$decoradorC_RV_InfoPago->setCvv("510");
$decoradorC_RV_InfoPago->setPrecioTotal("$27,850.00");

//Ahora verificaremos que realmente hemos construido un objeto Decorador Concreto
//que envuelve a otro objeto Decorador Concreto, y le ha añadido nueva funcionalidad.
//Para ésto basta acceder y visualizar todo el estado del objeto 'decoradorC_RV_InfoPago'
echo "<br>" . "**********************************************************************";
echo "<br>" . "DESCRIPCIÓN DEL OBJETO 'decoradorC_RV_InfoPago'" . "<br>";
echo "INFORMACIÓN DEL PAGO" . "<br>";
echo "Nombre del titular: " . $decoradorC_RV_InfoPago->getNombreTitular() . "<br>";
echo "Número de tarjeta: " . $decoradorC_RV_InfoPago->getNumeroTarjeta() . "<br>";
echo "Fecha de vencimiento: " . $decoradorC_RV_InfoPago->getNombreTitular() . "<br>";
echo "Código de seguridad: " . $decoradorC_RV_InfoPago->getCvv() . "<br>";
echo "Precio total: " . $decoradorC_RV_InfoPago->getPrecioTotal() . "<br>";

//Ahora obtenemos el objeto 'decoradorC_RV_InfoPasajero'
//envuelto por el decorador 'decoradorC_RV_InfoPago'
//y visualizamos su estado
$infoPasajero = $decoradorC_RV_InfoPago->getInfoPasajero();
echo "INFORMACIÓN DEL PASAJERO" . "<br>";
echo "Apellidos: " . $infoPasajero->getApellidos() . "<br>";
echo "Nombre: " . $infoPasajero->getNombre() . "<br>";
echo "Fecha de nacimiento: " . $infoPasajero->getFechaNacimiento() . "<br>";
echo "Sexo: " . $infoPasajero->getSexo() . "<br>";
echo "Número telefónico: " . $infoPasajero->getNumeroCelular() . "<br>";
echo "Dirección Email: " . $infoPasajero->getDireccionEmail() . "<br>";

//Finalmente, obtenemos el objeto 'reservacionVuelo_Itineraio'
//envuelto por el decorador 'decoradorC_RV_InfoPasajero', 
//a su vez envuelto por el decorador 'decoradorC_RV_InfoPago', 
//y visualizamos su estado
$infoItinerario = $infoPasajero->getReservacionVuelo_Itinerario();
echo "INFORMACIÓN DEL ITINERARIO" . "<br>";
echo "Origen: " . $infoItinerario->getOrigen() . "<br>";
echo "Destino: " . $infoItinerario->getDestino() . "<br>";
echo "Fecha: " . $infoItinerario->getFecha() . "<br>";
echo "Hora: " . $infoItinerario->getHora() . "<br>";
echo "Número de Vuelo: " . $infoItinerario->get_numeroVuelo() . "<br>";
