<?php
//include "Abstraccion_Reservacion.php";
class AReservacion_DPasajero extends Abstraccion_Reservacion
{
    public $apellidos;
    public $nombre;
    public $fechaNacimiento;
    public $sexo;
    public $numeroCelular;
    public $direccionEmail;

    public iReservacion_DPasajero $iReservacion_DPasajero;

    public function __construct($iReservacion_DPasajero)
    {
        $this->iReservacion_DPasajero = $iReservacion_DPasajero;
    }

    public function reservar()
    {
        $items_Itinerario = $this->iReservacion_DPasajero->implementaReservacion();
        $this->apellidos = $items_Itinerario[0];
        $this->nombre = $items_Itinerario[1];
        $this->fechaNacimiento = $items_Itinerario[2];
        $this->sexo = $items_Itinerario[3];
        $this->numeroCelular = $items_Itinerario[4];
        $this->direccionEmail = $items_Itinerario[5];
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of numeroCelular
     */
    public function getNumeroCelular()
    {
        return $this->numeroCelular;
    }

    /**
     * Set the value of numeroCelular
     *
     * @return  self
     */
    public function setNumeroCelular($numeroCelular)
    {
        $this->numeroCelular = $numeroCelular;

        return $this;
    }

    /**
     * Get the value of direccionEmail
     */
    public function getDireccionEmail()
    {
        return $this->direccionEmail;
    }

    /**
     * Set the value of direccionEmail
     *
     * @return  self
     */
    public function setDireccionEmail($direccionEmail)
    {
        $this->direccionEmail = $direccionEmail;

        return $this;
    }
}
