<?php
class Decorador_ReservacionVuelo implements I_ReservacionVuelo
{

    public function __construct()
    {
    }
    public function reservar()
    {
        //IMPLEMENTACIÓN... 
        //POR EL MOMENTO, LA IMPLEMENTACIÓN CONSISTE EN DEVOLVER UN OBJETO
        // DEL TIPO 'ReservacionVuelo_Itinerario'
        return $this;
    }

    /**
     * Get the value of itinerario
     */
}
