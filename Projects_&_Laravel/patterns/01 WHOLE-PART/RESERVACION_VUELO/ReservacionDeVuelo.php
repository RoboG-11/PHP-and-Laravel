<?php
//Declaración de la clase ReservacionDeVuelo
class ReservacionDeVuelo
{
  public $codigoReservacion;
  public ItinerarioVuelo $itinerarioVuelo;
  public DatosPasajero $datosPasajero;
  public DatosPago $datosPago;

  public function __construct($itinerarioVuelo, $datosPasajero, $datosPago)
  {
    $this->itinerarioVuelo = $itinerarioVuelo;
    $this->datosPasajero = $datosPasajero;
    $this->datosPago = $datosPago;
  }

  public function mostrar_InfoReservacion()
  {
    //POR IMPLEMENTAR
    echo "DATOS DEL VUELO:" . "<br>";
    echo "Número de vuelo: " . $this->itinerarioVuelo->get_numeroVuelo() . "<br>";
    echo "Origen: " . $this->itinerarioVuelo->getOrigen() . "<br>";
    echo "Destino: " . $this->itinerarioVuelo->getDestino() . "<br>";
    echo "Fecha: " . $this->itinerarioVuelo->getFecha() . "<br>";
    echo "Hora: " . $this->itinerarioVuelo->getHora() . "<br><br>";
    echo "DATOS DEL PASAJERO:" . "<br>";
    echo "Nombre: " . $this->datosPasajero->getNombre() . "<br>";
    echo "Apellidos: " . $this->datosPasajero->getApellidos() . "<br><br>";
    echo "DATOS DEL PAGO:" . "<br>";
    echo "Forma de pago: " . $this->datosPago->getNumeroTarjeta() . "<br>";
    echo "Precio total pagado: " . $this->datosPago->getPrecioTotal() . "<br>";
  }

  public function set_ItinerarioVuelo($itinerarioVuelo)
  {
    $this->itinerarioVuelo = $itinerarioVuelo;
  }
  public function get_ItinerarioVuelo()
  {
    return $this->itinerarioVuelo;
  }
  public function set_DatosPasajero($datosPasajero)
  {
    $this->datosPasajero = $datosPasajero;
  }
  public function get_DatosPasajero()
  {
    return $this->datosPasajero;
  }
  public function set_DatosPago($datosPago)
  {
    $this->datosPasajero = $datosPago;
  }
  public function get_DatosPago()
  {
    return $this->datosPago;
  }
  public function genera_CodigoReservacion()
  {
    $codReservacion = "ABC65P";
    $this->codigoReservacion = $codReservacion;
  }
  public function get_CodigoReservacion()
  {
    return $this->codigoReservacion;
  }
}
