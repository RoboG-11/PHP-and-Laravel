<?php
class Slave_ItinerarioVuelo
{
    public $numeroVuelo;
    public $origen;
    public $destino;
    public $fecha;
    public $hora;
    //CONSTRUCTOR
    public function __construct($numeroVuelo, $origen, $destino, $fecha, $hora)
    {
        $this->numeroVuelo = $numeroVuelo;
        $this->origen = $origen;
        $this->destino = $destino;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }
    public function set_numeroVuelo($numeroVuelo)
    {
        $this->numeroVuelo = $numeroVuelo;
    }
    public function get_numeroVuelo()
    {
        return $this->numeroVuelo;
    }

    /**
     * Get the value of origen
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set the value of origen
     *
     * @return  self
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
        return $this;
    }


    /**
     * Get the value of destino
     */
    public function getDestino()
    {
        return $this->destino;
    }


    /**
     * Set the value of destino
     *
     * @return  self
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
        return $this;
    }


    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }


    /**
     * Get the value of hora
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     *
     * @return  self
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
        return $this;
    }
}
