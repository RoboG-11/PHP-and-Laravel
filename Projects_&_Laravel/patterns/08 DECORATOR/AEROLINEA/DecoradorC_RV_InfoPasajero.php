<?php
class DecoradorC_RV_InfoPasajero extends Decorador_ReservacionVuelo
{
    public ReservacionVuelo_Itinerario $reservacionVuelo_Itinerario;
    public $apellidos;
    public $nombre;
    public $fechaNacimiento;
    public $sexo;
    public $numeroCelular;
    public $direccionEmail;

    public function __construct($reservacionVuelo_Itinerario)
    {
        $this->reservacionVuelo_Itinerario = $reservacionVuelo_Itinerario;
    }

    public function reservar()
    {
        //IMPLEMENTACIÓN... 
        //POR EL MOMENTO, LA IMPLEMENTACIÓN CONSISTE EN DEVOLVER UN OBJETO
        // DEL TIPO 'ReservacionVuelo_Itinerario'
        return $this;
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

    /**
     * Get the value of reservacionVuelo_Itinerario
     */
    public function getReservacionVuelo_Itinerario()
    {
        return $this->reservacionVuelo_Itinerario;
    }

    /**
     * Set the value of reservacionVuelo_Itinerario
     *
     * @return  self
     */
    public function setReservacionVuelo_Itinerario($reservacionVuelo_Itinerario)
    {
        $this->reservacionVuelo_Itinerario = $reservacionVuelo_Itinerario;

        return $this;
    }
}
