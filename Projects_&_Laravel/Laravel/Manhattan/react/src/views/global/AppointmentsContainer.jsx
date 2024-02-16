import { Appointment } from "../../components/Appointment";
import { useStateContext } from "../../contexts/ContextProvider";
import { useState, useEffect } from "react";
import axiosClient from "../../axios-client";

export const AppointmentsContainer = () => {
  const [appointments, setAppointments] = useState([]);
  const { user } = useStateContext();
  const userRol =
    user.rol === 2
      ? "doctor"
      : user.rol === 3
      ? "patient"
      : user.rol === 1
      ? "admin"
      : "unknown";

  useEffect(() => {
    let isMounted = true;

    axiosClient
      .get(`/${userRol}/${user.id}`)
      .then(({ data }) => {
        if (isMounted) {
          setAppointments(data.data.dates);
        }
      })
      .catch((error) => {
        console.error("Error al cargar citas médicas:", error);
      });

    return () => {
      isMounted = false; // Limpiar cuando el componente se desmonte
    };
  }, [user.id]);
  console.log(appointments);

  if (appointments?.length === 0) return <>Loading ...</>;
  return (
    <>
      <h1 className="pb-3">Mis citas médicas</h1>
      <div className="containers">
        {appointments.map((appointment) => (
          <Appointment key={appointment.id} appointment={appointment} />
        ))}
      </div>
    </>
  );
};
