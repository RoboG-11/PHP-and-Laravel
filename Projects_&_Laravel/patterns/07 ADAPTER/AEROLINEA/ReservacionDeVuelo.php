<?php
include("Reservacion.php");
//Declaración de la clase ReservacionDeVuelo
class ReservacionDeVuelo extends Reservacion
{
    public $codigoReservacion;
    public ItinerarioVuelo $itinerarioVuelo;
    public DatosPasajero $datosPasajero;
    public DatosPago $datosPago;

    public function __construct()
    {
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
    public function reservar()
    {
        //SE SIMULA LA ENTRADA INTERACTIVA DEL ITINERARIO DE VUELO,
        //DATOS DEL PASAJERO, Y DATOS DE PAGO
        //Creación de un objeto instancia de la clase ItinerarioVuelo
        $this->itinerarioVuelo = new ItinerarioVuelo("IB2042", "México", "Madrid", "30-06-2023", "12:10");

        //Creación de un objeto instancia de la clase DatosPasajero
        $this->datosPasajero = new DatosPasajero("González Pérez", "Pedro Pablo", "30-06-1968", "M", "5546789024", "ppgp@gmail.com");

        //Creación de un objeto instancia de la clase DatosPago
        $this->datosPago = new DatosPago("4356789023414320", "González Pérez", "Pedro Pablo", "12/2024", "896", "24,680.00");
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
