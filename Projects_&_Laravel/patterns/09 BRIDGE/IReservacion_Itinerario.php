<?php
include "Implementador_Reservacion.php";
class IReservacion_Itinerario extends Implementador_Reservacion
{
    public $itinerario = array();
    public function implementaReservacion()
    {
        //Se simula la visualización de los itinerarios de vuelo disponibles
        //y la selección del itinerario de vuelo requerido por el usuario
        $this->itinerario = ["AX302", "México", "Acapulco", "21/05/2023", "11:45", "$1860.00"];
        return $this->itinerario;
    }
}
