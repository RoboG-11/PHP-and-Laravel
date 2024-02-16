import Card from "react-bootstrap/Card";
import { useState, useEffect } from "react";
import axiosClient from "../axios-client";
import { useStateContext } from "../contexts/ContextProvider";
import Dropdown from "react-bootstrap/Dropdown";

export const Appointment = ({ appointment }) => {
  const { user } = useStateContext();
  const { id } = appointment;
  const [appointmentData, setAppointmentData] = useState(null);

  useEffect(() => {
    axiosClient
      .get(`/date/${id}`)
      .then(({ data }) => {
        setAppointmentData(data.data);
      })
      .catch((error) => {
        console.error(error);
      });
  }, [id]);

  const roleSpecificInfo = () => {
    if (user.rol === 2) {
      const patientInfo =
        appointmentData?.patient_information?.patient?.personal_information;
      return `Paciente: ${patientInfo?.name} ${patientInfo?.first_last_name} ${patientInfo?.second_last_name}`;
    } else if (user.rol === 3) {
      const doctorInfo =
        appointmentData?.doctor_information?.doctor?.personal_information;
      return `Doctor: ${doctorInfo?.name} ${doctorInfo?.first_last_name} ${doctorInfo?.second_last_name}`;
    }
    return "";
  };

  const updateAppointment = (status) => {
    axiosClient
      .put(`/date/update_status/${id}`, { status })
      .then(({ data }) => {
        console.log(data);
      })
      .catch((error) => {
        console.log(error);
      });
  };

  return (
    <Card
      className="appointment"
      key={id}
      style={{ width: "18rem", padding: "1rem" }}
    >
      <Card.Body>
        <h5>{appointmentData?.motive}</h5>
        <h6>{appointmentData?.status}</h6>
        <Card.Text>{roleSpecificInfo()}</Card.Text>
        {user.rol === 2 && (
          <Dropdown>
            <Dropdown.Toggle variant="success" id="dropdown-basic">
              {appointmentData?.status}
            </Dropdown.Toggle>
            <Dropdown.Menu>
              <Dropdown.Item onClick={() => updateAppointment("Aceptada")}>
                Aceptar
              </Dropdown.Item>
              <Dropdown.Item onClick={() => updateAppointment("Rechazada")}>
                Rechazar
              </Dropdown.Item>
            </Dropdown.Menu>
          </Dropdown>
        )}
      </Card.Body>
    </Card>
  );
};
