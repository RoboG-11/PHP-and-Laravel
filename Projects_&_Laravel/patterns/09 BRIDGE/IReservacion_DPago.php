<?php
class IReservacion_DPago extends Implementador_Reservacion
{
    public $datosPago = array();
    public function implementaReservacion()
    {
        //Se simula la introducción de la información del pasajero
        $this->datosPago = ["4857689033245780", "González Pérez", "Pedro Pablo", "12/2026", "560", "$1,860.00"];
        return $this->datosPago;
    }
}
