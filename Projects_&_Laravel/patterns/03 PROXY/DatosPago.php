<?php
class DatosPago
{
    public $numeroTarjeta;
    public $apellidosTitular;
    public $nombreTitular;
    public $fechaVencimiento;
    public $cvv;
    public $precioTotal;
    public function __construct($numeroTarjeta, $apellidosTitular, $nombreTitular, $fechaVencimiento, $cvv, $precioTotal)
    {
        $this->numeroTarjeta = $numeroTarjeta;
        $this->apellidosTitular = $apellidosTitular;
        $this->nombreTitular = $nombreTitular;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->cvv = $cvv;
        $this->precioTotal = $precioTotal;
    }


    /**
     * Get the value of numeroTarjeta
     */
    public function getNumeroTarjeta()
    {
        return $this->numeroTarjeta;
    }

    /**
     * Set the value of numeroTarjeta
     *
     * @return  self
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {
        $this->numeroTarjeta = $numeroTarjeta;
        return $this;
    }


    /**
     * Get the value of apellidosTitular
     */
    public function getApellidosTitular()
    {
        return $this->apellidosTitular;
    }

    /**
     * Set the value of apellidosTitular
     *
     * @return  self
     */
    public function setApellidosTitular($apellidosTitular)
    {
        $this->apellidosTitular = $apellidosTitular;
        return $this;
    }

    /**
     * Get the value of nombreTitular
     */
    public function getNombreTitular()
    {
        return $this->nombreTitular;
    }

    /**
     * Set the value of nombreTitular
     *
     * @return  self
     */
    public function setNombreTitular($nombreTitular)
    {
        $this->nombreTitular = $nombreTitular;
        return $this;
    }

    /**
     * Get the value of fechaVencimiento
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set the value of fechaVencimiento
     *
     * @return  self
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;
        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
        return $this;
    }

    /**
     * Get the value of precioTotal
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set the value of precioTotal
     *
     * @return  self
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;
        return $this;
    }
}
