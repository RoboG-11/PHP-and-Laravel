import { useState, useRef, useEffect } from "react";
import { useStateContext } from "../../contexts/ContextProvider";
import defaultProfile from "../../assets/img/DefaultProfile.jpg";
import axiosClient from "../../axios-client";
import { daysOptions, monthsOptions, yearsOptions } from "../../utils.jsx";

export const Account = () => {
  const { user } = useStateContext();
  console.log(user);
  const dayRef = useRef(null);
  const monthRef = useRef(null);
  const yearRef = useRef(null);
  const fileRef = useRef(null);
  const sexRef = useRef(null);
  const refs = {
    name: useRef(null),
    email: useRef(null),
    first_last_name: useRef(null),
    second_last_name: useRef(null),
    phone: useRef(null),
    age: useRef(null),
  };

  const [selectedSex, setSelectedSex] = useState(user.sex || "male");
  const [editedUser, setEditedUser] = useState({ ...user });
  const [errors, setErrors] = useState(null);

  useEffect(() => {
    const birthDate = new Date(user.date_of_birth);
    refs.age.current.value = user.age;
    dayRef.current.value = birthDate.getDate();
    monthRef.current.value = birthDate.getMonth() + 1;
    yearRef.current.value = birthDate.getFullYear();
    sexRef.current.value = user.sex;
  }, [user.date_of_birth, user.age]);

  const handleInputChange = (e) => {
    const { name, value } = e.target;
    setEditedUser((prevUser) => ({
      ...prevUser,
      [name]: value,
    }));
  };

  const onSubmit = async (ev) => {
    ev.preventDefault();

    const payload = {
      name: refs.name.current.value,
      email: refs.email.current.value,
      password: refs.password.current.value,
      password_confirmation: refs.passwordConfirmation.current.value,
      first_last_name: refs.first_last_name.current.value,
      second_last_name: refs.second_last_name.current.value,
      phone: refs.phone.current.value,
      sex: selectedSex,
      age: refs.age.current.value,
      date_of_birth: `${year}-${month}-${day}`,
      link_photo: fileRef.current.files[0],
    };

    try {
      const { data } = await axiosClient.post("/user/update", payload);
    } catch (err) {
      const response = err.response;
      if (response && response.status === 422) {
        setErrors(response.data.errors);
      }
    }
  };

  return (
    <div className="user-profile">
      <h1>Perfil de Usuario</h1>
      <form onSubmit={onSubmit} className="user-details">
        <div className="user-photo">
          <img
            src={editedUser.link_photo || defaultProfile}
            alt={`${editedUser.name} ${editedUser.first_last_name}`}
          />
          <input ref={fileRef} type="file" placeholder="File" />
        </div>
        <div className="user-info">
          {Object.keys(refs).map((field) => (
            <label key={field}>
              <span>
                {field
                  .replace(/_/g, " ")
                  .replace(/\b\w/g, (c) => c.toUpperCase())}
                : *
              </span>
              <input
                ref={refs[field]}
                type={field.includes("password") ? "password" : "text"}
                name={field}
                value={editedUser[field]}
                onChange={handleInputChange}
              />
            </label>
          ))}
          <label>
            <input
              ref={sexRef}
              type="radio"
              value="female"
              checked={selectedSex === "female"}
              onChange={() => setSelectedSex("female")}
            />
            Female
          </label>
          <div>
            <select ref={dayRef}>{daysOptions}</select>
            <select ref={monthRef}>{monthsOptions}</select>
            <select ref={yearRef}>{yearsOptions}</select>
          </div>
          <button className="btn btn-block">Guardar Cambios</button>
        </div>
      </form>
      {errors && (
        <div className="error-message">
          {Object.values(errors).map((error) => (
            <p key={error}>{error}</p>
          ))}
        </div>
      )}
    </div>
  );
};
