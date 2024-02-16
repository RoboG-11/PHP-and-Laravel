import { useState, useEffect } from "react";
import axiosClient from "../../axios-client";

import { Specialty } from "../../components/Specialty";

export const SpecialtiesContainer = () => {
  const [specialties, setSpecialties] = useState([]);

  useEffect(() => {
    axiosClient.get("/specialty").then(({ data }) => {
      setSpecialties(data.data);
    });
  }, []);

  return (
    <>
      <h1 className="pb-3">Especialidades</h1>
      <div className="containers">
        {specialties.map((specialty) => (
          <Specialty key={specialty.id} specialty={specialty} />
        ))}
      </div>
    </>
  );
};
