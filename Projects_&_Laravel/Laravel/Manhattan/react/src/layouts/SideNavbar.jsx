import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import { useStateContext } from "../contexts/ContextProvider";
import { Link } from "react-router-dom";
export const SideNavbar = () => {
  const { user } = useStateContext();
  return (
    <>
      <aside>
        <h1>Manhattan project</h1>
        <hr></hr>
        <Link to="/overview">Overview</Link>
        <Link to="/myAppointments">Mis citas médicas</Link>
        {user.rol === 1 && (
          <>
            <Link to="/admin/users">Users</Link>
          </>
        )}
        {user.rol === 2 && (
          <>
            <Link to="/dashboard">Doctor</Link>
            <Link to="/users">Doctor</Link>
            <Link to="/specialties">Ver especialidades</Link>
          </>
        )}
        {user.rol === 3 && (
          <>
            <Link to="/patient/doctors">Ver doctores</Link>
            <Link to="/specialties">Ver especialidades</Link>
            <Link to="/test">Añadir foto</Link>
          </>
        )}
        <Link to="/account">Mi cuenta</Link>
      </aside>
    </>
  );
};
