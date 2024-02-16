<?php
class Gestor_ReservacionHotel
{
    public $ciudad;
    public $fechaEntrada;
    public $fechaSalida;

    public function buscarHotel($ciudad, $fechaEntrada, $fechaSalida)
    {
        //AQUÍ SE DEBE IMPLEMENTAR LA BÚSQUEDA DE HOTELES QUE SATISFAGAN
        //LOS CRITERIOS DEL CLIENTE
        echo "<br>" . "SE PROCEDE A BUSCAR LOS HOTELES QUE SATISFAGAN
        LOS SIGUIENTES CRITERIOS DEL CLIENTE:" . "<br>";
        echo "Ciudad: " . $ciudad . "<br>";
        echo "Fecha de entrada: " . $fechaEntrada . "<br>";
        echo "Fecha de salida: " . $fechaSalida . "<br>";
    }
}
