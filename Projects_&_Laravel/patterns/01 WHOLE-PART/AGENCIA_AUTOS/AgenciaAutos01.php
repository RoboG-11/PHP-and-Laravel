<?php
//Declaración de la clase Auto
class Auto
{
  public $marca;
  public $modelo;
  public $anio;
  public $precio;

  public function __construct($marca, $modelo, $anio, $precio)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->anio = $anio;
    $this->precio = $precio;
  }

  public function mostrarInformacion()
  {
    echo "Marca: " . $this->marca . "<br>";
    echo "Modelo: " . $this->modelo . "<br>";
    echo "Año: " . $this->anio . "<br>";
    echo "Precio: " . $this->precio . "<br>";
  }
}

class AgenciaAutos
{
  public $nombre;
  public $direccion;
  public $contactos;
  public $autos = array();

  public function __construct($nombre, $direccion, $contactos)
  {
    $this->nombre = $nombre;
    $this->direccion = $direccion;
    $this->contactos = $contactos;
  }

  public function agregarAuto(Auto $auto)
  {
    $this->autos[] = $auto;
  }

  public function mostrarInformacion()
  {
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Direccion: " . $this->direccion . "<br>";
    echo "Contactos: " . $this->contactos . "<br>" . "<br>";
    echo "AUTOS DISPONIBLES: <br>";
    foreach ($this->autos as $auto) {
      $auto->mostrarInformacion();
      echo "<br>";
    }
  }
}
