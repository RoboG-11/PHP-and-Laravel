<?php
class Adaptador_ReservacionHotel extends Reservacion
{
    public Gestor_ReservacionHotel $gestor_ReservacionHotel;
    public function __construct($gestor_ReservacionHotel)
    {
        $this->gestor_ReservacionHotel = $gestor_ReservacionHotel;
    }

    //LA FUNCIÓN 'reservar()' INVOCA EL MÉTODO 'buscarHotel()' DEL OBJETO
    //'gestor_ReservacionHotel' EL CUAL RECIBIÓ COMO PARÁMETRO
    public function reservar()
    {
        //SE SIMULA LA ENTRADA INTERACTIVA DE LA CIUDAD Y FECHAS
        //PARA LA RESERVACIÓN DE HOTEL
        echo "<br>" . "SELECCIONE LA CIUDAD EN LA QUE REQUIERE RESERVAR HOTEL:" . "<br>";
        //IMPLEMENTAR LA SELECCIÓN DE LA CIUDAD DONDE SE RESERVARÁ EL HOTEL
        echo "<br>" . "SELECCIONE LA FECHA DE ENTRADA AL HOTEL:" . "<br>";
        //IMPLEMENTAR SELECCIÓN DE FECHA DE ENTRADA AL HOTEL
        echo "<br>" . "SELECCIONE LA FECHA DE SALIDA DEL HOTEL:" . "<br>";
        //IMPLEMENTAR SELECCIÓN DE FECHA DE SALIDA DEL HOTEL
        //SE SIMULAN DATOS DE ENTRADA PARA ENVIAR AL 'gestor_ReservacionHotel'
        $this->gestor_ReservacionHotel->buscarHotel("Madrid", "01/07/2023", "08/07/2023");
    }
}
