<?php
class Checkin implements ICheckIn
{
  public $infoPasajero;
  public $itinerarioV;
  public $nombreP;
  public $apellidosP;
  public $numVuelo;
  public $origenV;
  public $destinoV;
  public $fechaV;
  public $horaV;

  public PaseDeAbordar $paseDeAbordar;
  public ReservacionDeVuelo $reservacionDeVuelo;

  public function __construct($reservacionDeVuelo)
  {
    $this->reservacionDeVuelo = $reservacionDeVuelo;
  }
  public function efectua_CheckIn(): void
  {
    //Código precedente, de ser necesario
    //$apellidosPasajero, $nombrePasajero, $numeroVuelo, $origen, $destino, $fecha, $hora
    $infoPasajero = $this->reservacionDeVuelo->get_DatosPasajero();
    $itinerarioV = $this->reservacionDeVuelo->get_ItinerarioVuelo();
    $this->nombreP = $infoPasajero->getNombre();
    $this->apellidosP = $infoPasajero->getApellidos();
    $this->numVuelo = $itinerarioV->get_numeroVuelo();
    $this->origenV = $itinerarioV->getOrigen();
    $this->destinoV = $itinerarioV->getDestino();
    $this->fechaV = $itinerarioV->getFecha();
    $this->horaV = $itinerarioV->getHora();

    //Se crea un Objeto instancia de la Clase PaseDeAbordar
    //y se pasan como parámetros al constructor todos los datos
    //obtenidos de la ReservacionDeVuelo
    $this->paseDeAbordar = new PaseDeAbordar(
      $this->apellidosP,
      $this->nombreP,
      $this->numVuelo,
      $this->origenV,
      $this->destinoV,
      $this->fechaV,
      $this->horaV
    );

    //Se completa el Pase de Abordar con la signación del
    //Asiento y Código QR
    $this->paseDeAbordar->asignaAsiento();
    $this->paseDeAbordar->generaCodigoQR();
  }

  /**
   * Get the value of paseDeAbordar
   */
  public function getPaseDeAbordar()
  {
    return $this->paseDeAbordar;
  }
  public function despliegaPaseDeAbordar()
  {
    echo "<br>" . "<br>" . "********** PASE DE ABORDAR **********" . "<br>" . "<br>";
    echo "PASAJERO: " . $this->nombreP . " " . $this->apellidosP . "<br>";
    echo "NÚMERO DE VUELO: " . $this->numVuelo . "<br>";
    echo "ORIGEN: " . $this->origenV . "<br>";
    echo "DESTINO: " . $this->destinoV . "<br>";
    echo "FECHA: " . $this->fechaV . "<br>";
    echo "HORA: " . $this->horaV . "<br>";
    echo "ASIENTO: " . $this->paseDeAbordar->getAsiento() . "<br>" . "<br>";
    echo "**************************************" . "<br>" . "<br>";
    echo "CÓDIGO QR: " . $this->paseDeAbordar->getCodigoQR() . "<br>" . "<br>";
  }
}
