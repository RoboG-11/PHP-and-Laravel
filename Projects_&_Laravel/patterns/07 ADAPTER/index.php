<?php
//include("./AEROLINEA/Adaptador_ReservacionHotel.php");
//include("./SISTEMA_HOTELERO/Gestor_ReservacionHotel.php");
include("Cliente.php");

//SE CREA UNA INSTANCIA DE LA CLASE 'Cliente' Y SE INVOCA EL MÉTODO
//'efectuar_reservacion'
$cliente = new Cliente();
$cliente->efectuar_reservacion();
