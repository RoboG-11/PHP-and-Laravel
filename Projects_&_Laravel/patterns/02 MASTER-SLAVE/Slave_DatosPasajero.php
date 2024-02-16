<?php
class Slave_DatosPasajero
{
    public $apellidos;
    public $nombre;
    public $fechaNacimiento;
    public $sexo;
    public $numeroCelular;
    public $direccionEmail;

    public function __construct($apellidos, $nombre, $fechaNacimiento, $sexo, $numeroCelular, $direccionEmail)
    {
        $this->apellidos = $apellidos;
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
        $this->numeroCelular = $numeroCelular;
        $this->direccionEmail = $direccionEmail;
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
