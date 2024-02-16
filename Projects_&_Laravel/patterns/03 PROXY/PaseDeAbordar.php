<?php
class PaseDeAbordar
{
    public $apellidosPasajero;
    public $nombrePasajero;
    public $numeroVuelo;
    public $origen;
    public $destino;
    public $fecha;
    public $hora;
    public $asiento;
    public $codigoQR;
    //CONSTRUCTOR
    public function __construct($apellidosPasajero, $nombrePasajero, $numeroVuelo, $origen, $destino, $fecha, $hora)
    {
        $this->apellidosPasajero = $apellidosPasajero;
        $this->nombrePasajero = $nombrePasajero;
        $this->numeroVuelo = $numeroVuelo;
        $this->origen = $origen;
        $this->destino = $destino;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }

    public function asignaAsiento()
    {
        //Se simula la asignación de asientos
        $this->asiento = "18A";
    }


    public function generaCodigoQR()
    {
        //Se simula la generación del códgio QR
        $caracteresPermitidos = '0123456789abcdefghijklmnopqrstuvwxyz';
        $this->codigoQR = substr(str_shuffle($caracteresPermitidos), 0, 10);
    }

    /**
     * Get the value of asiento
     */
    public function getAsiento()
    {
        return $this->asiento;
    }

    /**
     * Get the value of codigoQR
     */
    public function getCodigoQR()
    {
        return $this->codigoQR;
    }
}
