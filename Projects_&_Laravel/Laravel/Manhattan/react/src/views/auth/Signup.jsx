import { useRef, useState } from "react";
import { Link } from "react-router-dom";
import axiosClient from "../../axios-client";
import { useStateContext } from "../../contexts/ContextProvider";
import { daysOptions, monthsOptions, yearsOptions } from "../../utils.jsx";

export const Signup = () => {
  const nameRef = useRef(null);
  const emailRef = useRef(null);
  const passwordRef = useRef(null);
  const passwordConfirmationRef = useRef(null);
  const firstLastNameRef = useRef(null);
  const secondLastNameRef = useRef(null);
  const phoneRef = useRef(null);
  const ageRef = useRef(null);
  const dayRef = useRef(null);
  const monthRef = useRef(null);
  const yearRef = useRef(null);
  const rolRef = useRef(null);

  const [selectedSex, setSelectedSex] = useState("male"); // Default value for sex
  const { setUser, setToken } = useStateContext();
  const [errors, setErrors] = useState(null);

  const onSubmit = (ev) => {
    ev.preventDefault();
    const day = dayRef.current.value;
    const month = monthRef.current.value;
    const year = yearRef.current.value;
    const payload = {
      name: nameRef.current.value,
      email: emailRef.current.value,
      password: passwordRef.current.value,
      password_confirmation: passwordConfirmationRef.current.value,
      first_last_name: firstLastNameRef.current.value,
      second_last_name: secondLastNameRef.current.value,
      phone: phoneRef.current.value,
      sex: selectedSex, // Use state to store selected sex valu,
      age: ageRef.current.value,
      rol: rolRef.current.value,
      date_of_birth: `${year}-${month}-${day}`,
    };
    axiosClient
      .post("/signup", payload)
      .then(({ data }) => {
        setUser(data.user);
        setToken(data.token);
      })
      .catch((err) => {
        const response = err.response;
        // ! If there is response and the response.status = 422 is a validation error
        if (response && response.status === 422) {
          
          setErrors(response.data.errors);
        }
      });
  };

  return (
    <div className="login-signup-form animated fadeInDown">
      <div className="form">
        <form onSubmit={onSubmit}>
          <h1 className="title">Sign up for free</h1>
          {errors && (
            <div className="alert">
              {Object.keys(errors).map((key) => (
                <p key={key}>{errors[key][0]}</p>
              ))}
            </div>
          )}
          <input ref={nameRef} type="text" placeholder="Name/s" />
          <input
            ref={firstLastNameRef}
            type="text"
            placeholder="First Last Name"
          />
          <input
            ref={secondLastNameRef}
            type="text"
            placeholder="Second Last Name"
          />
          <input ref={emailRef} type="email" placeholder="Email" />
          <input ref={phoneRef} type="tel" placeholder="Phone" />
          <div>
            <label>
              <input
                type="radio"
                value="male"
                checked={selectedSex === "male"}
                onChange={() => setSelectedSex("male")}
              />
              Male
            </label>
            <label>
              <input
                type="radio"
                value="female"
                checked={selectedSex === "female"}
                onChange={() => setSelectedSex("female")}
              />
              Female
            </label>
          </div>
          <input ref={ageRef} type="number" placeholder="Age" />
          <div>
            <select ref={dayRef}>{daysOptions}</select>
            <select ref={monthRef}>{monthsOptions}</select>
            <select ref={yearRef}>{yearsOptions}</select>
          </div>
          <select ref={rolRef}>
            <option value="2">Doctor</option>
            <option value="3">Paciente</option>
          </select>
          <input ref={passwordRef} type="password" placeholder="Password" />
          <input
            ref={passwordConfirmationRef}
            type="password"
            placeholder="Password Confirmation"
          />
          <button className="btn btn-block">Sign up</button>
          <p className="message">
            Already registred? <Link to="/login">Sign in</Link>
          </p>
        </form>
      </div>
    </div>
  );
};
