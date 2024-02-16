<?php
//Se incluyen los archivos php que contiene las clases ReservacionDeVuelo,
//ItinerarioVuelo, DatosPasajero y DatosPago
//Dado que son archivos locales, de su interpretación se encargará
//el archivo que los incluyó. 
include("./AEROLINEA/ReservacionDeVuelo.php");
include("./AEROLINEA/ItinerarioVuelo.php");
include("./AEROLINEA/DatosPasajero.php");
include("./AEROLINEA/DatosPago.php");
include("./AEROLINEA/Adaptador_ReservacionHotel.php");
include("./SISTEMA_HOTELERO/Gestor_ReservacionHotel.php");
class Cliente
{
    public $reservacionDeVuelo;
    public $adaptador_ReservacionHotel;
    public $gestor_ReservacionHotel;
    //Creación de un objeto instancia de la clase ReservacionDeVuelo
    //Ésta es realmente la Clase con la cual la Clase Cliente ('index')
    //sabe interactuar, pues conoce su interfaz
    public function efectuar_reservacion()
    {
        $this->reservacionDeVuelo = new ReservacionDeVuelo();

        //SE INVOCA EL MÉTODO ´reservar()´ del Objeto 'reservacionDeVuelo'
        //el cual se encarga de simular la entrada interactiva de la información
        //de Itinerario, Datos de Pasajero, y Datos de Pago
        $this->reservacionDeVuelo->reservar();

        //Se invoca el método mostrarInformación()
        //el cual visualiza toda la información de la reservación de vuelo
        $this->reservacionDeVuelo->mostrar_InfoReservacion();

        //Ahora, a través del Adaptador de Objetos 'Adaptador-ReservacionHotel',
        //se podrá proceder a la reservación del hotel
        $this->gestor_ReservacionHotel = new Gestor_ReservacionHotel();
        $this->adaptador_ReservacionHotel = new Adaptador_ReservacionHotel($this->gestor_ReservacionHotel);
        $this->adaptador_ReservacionHotel->reservar();
    }
}
