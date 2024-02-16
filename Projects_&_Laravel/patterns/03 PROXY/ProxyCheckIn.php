<?php
class ProxyCheckIn implements ICheckIn
{
  public ReservacionDeVuelo $reservacionDeVuelo;
  public CheckIn $checkIn;

  public function __construct($reservacionDeVuelo)
  {
    $this->reservacionDeVuelo = $reservacionDeVuelo;
    $this->checkIn = new CheckIn($reservacionDeVuelo);
  }

  public function efectua_CheckIn(): void
  {
    if ($this->puedeEfectuarCheckIn()) {
      $this->checkIn->efectua_CheckIn();
      echo "<br>" . "SE PUDO EFECTUAR EL CHECKIN CORRECTAMENTE PARA LA RESERVACIÓN: "
        . $this->reservacionDeVuelo->get_CodigoReservacion() . "<br>";
    } else {
      echo "<br>" . "AÚN NO ES POSIBLE EFECTUAR EL CHECKIN PARA LA RESERVACIÓN: "
        . $this->reservacionDeVuelo->get_CodigoReservacion() . "<br>";
    }
  }

  //Una función del Proxy es verificar si se cumplen las condiciones
  //para poder efectuar el CheckIn
  private function puedeEfectuarCheckIn(): bool
  {
    // Se verifican las considiciones para poder efectuar el CheckIn
    $statusR = $this->reservacionDeVuelo->getStatusReservacion();
    if ($statusR == "OK") {
      return true;
    } else {
      return false;
    }
  }
  public function despliegaPaseDeAbordar()
  {
    $this->checkIn->despliegaPaseDeAbordar();
  }
}
