<?php
include("Slave_ItinerarioVuelo.php");
include("Slave_DatosPasajero.php");
include("Slave_DatosPago.php");
//PATRÓN MASTER-SLAVE
//Declaración de la clase Master_ReservacionDeVuelo
class Master_ReservacionDeVuelo
{
    public $codigoReservacion = "C9D14H";
    public $sel_Itinerario;
    public $sel_DPasajero;
    public $sel_DPago;

    public function __construct($sel_Itinerario, $sel_DPasajero, $sel_DPago)
    {
        $this->sel_Itinerario = $sel_Itinerario;
        $this->sel_DPasajero = $sel_DPasajero;
        $this->sel_DPago = $sel_DPago;
    }
    public function ejecucion_TareasReservacion()
    {
        //Se simula la entrada de datos interactivas con la información
        //del itinerario de vuelo
        if ($this->sel_Itinerario == 1) {
            $itinerarioVuelo = $this->creacion_Itinerario("IB2042", "México", "Madrid", "214-04-2023", "12:10");
        } else {
            $itinerarioVuelo = null;
        }

        //Se simula la entrada de datos interactivas con la información
        //de los datos de pasajero
        if ($this->sel_DPasajero == 1) {
            $datosPasajero = $this->creacion_DatosPasajero("González Pérez", "Pedro Pablo", "30-06-1968", "M", "5546789024", "ppgp@gmail.com.mx");
        } else {
            $datosPasajero = null;
        }

        //Se simula la entrada de datos interactivas con la información
        //de los dagos de pago
        if ($this->sel_DPago == 1) {
            $datosPago = $this->creacion_DatosPago("4356789023414320", "González Pérez", "Pedro Pablo", "12/2024", "896", "24,680.00");
        } else {
            $datosPago = null;
        }

        //Mostrar información de la Reservación efectuada
        $this->mostrar_InfoReservacion(
            $itinerarioVuelo,
            $datosPasajero,
            $datosPago
        );

        //Retorna una arreglo conformado por los objetos
        //'itinerarioVuelo', 'datosPasajero' y 'datosPago'
        if ($this->sel_Itinerario == 1 and $this->sel_DPasajero == 1 and $this->sel_DPago == 1) {
            return [$itinerarioVuelo, $datosPasajero, $datosPago];
        }

        //Retorna una arreglo conformado por los objetos
        //'itinerarioVuelo' y 'datosPasajero'
        if ($this->sel_Itinerario == 1 and $this->sel_DPasajero == 1 and $this->sel_DPago == 0) {
            return [$itinerarioVuelo, $datosPasajero];
        }
    }

    //Asignación de la tarea 'creacion_Itinerario' 
    //al Slave 'itinerarioVuelo'
    private function creacion_Itinerario(
        $numerovuelo,
        $origen,
        $destino,
        $fecha,
        $hora
    ) {
        $itinerarioVuelo = new Slave_ItinerarioVuelo(
            $numerovuelo,
            $origen,
            $destino,
            $fecha,
            $hora
        );
        return $itinerarioVuelo;
    }

    //Asignación de la tarea 'creacion_DatosPasajero' al Slave 
    //'datosPasajero'
    private function creacion_DatosPasajero(
        $apellidos,
        $nombre,
        $fechaNacimiento,
        $sexo,
        $numeroCelular,
        $direccionEmail
    ) {
        $datosPasajero = new Slave_DatosPasajero(
            $apellidos,
            $nombre,
            $fechaNacimiento,
            $sexo,
            $numeroCelular,
            $direccionEmail
        );
        return $datosPasajero;
    }

    //Asignación de la tarea 'creacion_DatosPago' al Slave 
    //'datosPago'
    private function creacion_DatosPago(
        $numeroTarjeta,
        $apellidosTitular,
        $nombreTitular,
        $fechaVencimiento,
        $cvv,
        $precioTotal
    ) {
        $datosPago = new Slave_DatosPago(
            $numeroTarjeta,
            $apellidosTitular,
            $nombreTitular,
            $fechaVencimiento,
            $cvv,
            $precioTotal
        );
        return $datosPago;
    }
    private function mostrar_InfoReservacion(
        $itinerarioVuelo,
        $datosPasajero,
        $datosPago
    ) {
        echo "CÓDIGO DE RESERVACIÓN:" . $this->codigoReservacion . "<br><br>";
        if ($this->sel_Itinerario == 1) {
            echo "DATOS DEL VUELO:" . "<br>";
            echo "Número de vuelo: " . $itinerarioVuelo->get_numeroVuelo() . "<br>";
            echo "Origen: " . $itinerarioVuelo->getOrigen() . "<br>";
            echo "Destino: " . $itinerarioVuelo->getDestino() . "<br>";
            echo "Fecha: " . $itinerarioVuelo->getFecha() . "<br>";
            echo "Hora: " . $itinerarioVuelo->getHora() . "<br><br>";
        }
        if ($this->sel_DPasajero == 1) {
            echo "DATOS DEL PASAJERO:" . "<br>";
            echo "Nombre: " . $datosPasajero->getNombre() . "<br>";
            echo "Apellidos: " . $datosPasajero->getApellidos() . "<br><br>";
        }
        if ($this->sel_DPago == 1) {
            echo "DATOS DEL PAGO:" . "<br>";
            echo "Forma de pago: " . $datosPago->getNumeroTarjeta() . "<br>";
            echo "Precio total pagado: " . $datosPago->getPrecioTotal() . "<br>";
        }
    }
}
