import { useState, useEffect, useRef } from "react";
import { useStateContext } from "../../contexts/ContextProvider";
import axiosClient from "../../axios-client";
import { useParams } from "react-router-dom";
import { formatTime } from "../../utils";

export const DoctorDetail = () => {
  const [doctor, setDoctor] = useState();
  const { user } = useStateContext();
  const { id } = useParams();
  const appointmentDateRef = useRef(null);
  const appointmentTimeRef = useRef(null);
  useEffect(() => {
    axiosClient.get(`/doctor/${id}`).then(({ data }) => {
      setDoctor(data.data);
    });
  }, [id]);

  const handleAppointmentSubmit = (ev) => {
    ev.preventDefault();

    const payload = {
      doctor_user_id: id,
      patient_user_id: user.id,
      date: appointmentDateRef.current.value,
      time: formatTime(appointmentTimeRef.current.value),
    };
    axiosClient.post("/date", payload).then(({ data }) => {
      console.log(data);
    });
  };

  return (
    <>
      {doctor && (
        <div className="doctor-detail">
          <h1 className="pb-3">{`Dr. ${doctor.personal_information.name} ${doctor.personal_information.first_last_name}`}</h1>
          <div className="doctor-info">
            <div className="personal-info">
              <h2>Información Personal</h2>
              <p>Email: {doctor.personal_information.email}</p>
              <p>Teléfono: {doctor.personal_information.phone}</p>
              <p>Edad: {doctor.personal_information.age}</p>
              {/* Agrega más información personal según sea necesario */}
            </div>
            <div className="specialties">
              <h2>Especialidades</h2>
              <ul>
                {doctor.especialidades.map((specialty) => (
                  <li key={specialty.id}>
                    <strong>{specialty.speciality_name}:</strong>{" "}
                    {specialty.description}
                  </li>
                ))}
              </ul>
            </div>
            <div className="establishments">
              <h2>Establecimientos</h2>
              <ul>
                {doctor.establishments.map((establishment) => (
                  <li key={establishment.id}>
                    <strong>{establishment.establishment_name}</strong>
                  </li>
                ))}
              </ul>
            </div>
          </div>
          <h2>Agendar cita médica:</h2>
          <form onSubmit={handleAppointmentSubmit}>
            <label htmlFor="appointmentDate">Fecha de la cita:</label>
            <input
              type="date"
              id="appointmentDate"
              name="appointmentDate"
              ref={appointmentDateRef}
            />

            <label htmlFor="appointmentTime">Hora de la cita:</label>
            <input
              type="time"
              id="appointmentTime"
              name="appointmentTime"
              ref={appointmentTimeRef}
            />

            <button type="submit">Agendar Cita</button>
          </form>
        </div>
      )}
    </>
  );
};
