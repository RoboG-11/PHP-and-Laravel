import { useState, useEffect } from "react";
import axiosClient from "../../axios-client";
import { Doctor } from "../../components/Doctor";
import { useParams } from "react-router-dom";

export const DoctorsBySpecialty = () => {
  const [doctors, setDoctors] = useState([]);
  const { id, specialityName } = useParams();
  useEffect(() => {
    axiosClient.get(`/specialties/${id}/doctors`).then(({ data }) => {
      setDoctors(data.data);
    });
  }, [id]);

  return (
    <>
      <h1 className="pb-3">{specialityName}</h1>
      <div className="containers">
        {doctors.map((doctor) => (
          <Doctor key={doctor.personal_information.id} doctor={doctor} />
        ))}
      </div>
    </>
  );
};
