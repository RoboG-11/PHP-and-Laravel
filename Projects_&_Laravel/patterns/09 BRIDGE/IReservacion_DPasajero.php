<?php
//include "Implementador_Reservacion.php";
class IReservacion_DPasajero extends Implementador_Reservacion
{
    public $datosPasajero = array();
    public function implementaReservacion()
    {
        //Se simula la introducción de la información del pasajero
        $this->datosPasajero = ["González Pérez", "Pedro Pablo", "30/06/1960", "M", "5510201020", "pgonzalezp@gmail.com"];
        return $this->datosPasajero;
    }
}
