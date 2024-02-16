import { useState, useEffect } from "react";
import axiosClient from "../../axios-client";

import { Doctor } from "../../components/Doctor";

export const DoctorsContainer = () => {
  const [doctors, setDoctors] = useState([]);

  useEffect(() => {
    axiosClient.get("/doctor").then(({ data }) => {
      setDoctors(data.data);
    });
  }, []);

  return (
    <>
      <h1 className="pb-3">Doctores</h1>
      <div className="containers">
        {doctors.map((doctor) => (
          <Doctor key={doctor.personal_information.id} doctor={doctor} />
        ))}
      </div>
    </>
  );
};
