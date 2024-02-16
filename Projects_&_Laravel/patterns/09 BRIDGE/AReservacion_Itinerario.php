<?php
//include "IReservacion_Itinerario.php";
include "Abstraccion_Reservacion.php";
class AReservacion_Itinerario extends Abstraccion_Reservacion
{
    public $numeroVuelo;
    public $origen;
    public $destino;
    public $fecha;
    public $hora;
    public $precio;

    //Atributo del tipo del Implementador Concreto de esta
    //Abstracción Concreta
    public IReservacion_Itinerario $iReservacion_Itinerario;

    public function __construct($iReservacion_Itinerario)
    {
        $this->iReservacion_Itinerario = $iReservacion_Itinerario;
    }


    public function reservar()
    {
        $items_Itinerario = $this->iReservacion_Itinerario->implementaReservacion();
        $this->numeroVuelo = $items_Itinerario[0];
        $this->origen = $items_Itinerario[1];
        $this->destino = $items_Itinerario[2];
        $this->fecha = $items_Itinerario[3];
        $this->hora = $items_Itinerario[4];
        $this->precio = $items_Itinerario[5];
    }

    /**
     * Get the value of numeroVuelo
     */
    public function getNumeroVuelo()
    {
        return $this->numeroVuelo;
    }

    /**
     * Set the value of numeroVuelo
     *
     * @return  self
     */
    public function setNumeroVuelo($numeroVuelo)
    {
        $this->numeroVuelo = $numeroVuelo;

        return $this;
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

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
}
