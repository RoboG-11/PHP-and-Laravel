import { Navigate, createBrowserRouter } from "react-router-dom";
import { Login } from "./views/auth/Login.jsx";
import { Signup } from "./views/auth/Signup.jsx";
import { Users } from "./views/admin/Users.jsx";
import { NotFound } from "./views/global/NotFound.jsx";
import { DefaultLayout } from "./layouts/DefaultLayout.jsx";
import { GuestLayout } from "./layouts/GuestLayout.jsx";
import { Auth } from "./components/Auth.jsx";
import { Overview } from "./views/global/Overview.jsx";
import { Unauthorized } from "./views/global/Unauthorized.jsx";
import { DoctorsContainer } from "./views/patient/DoctorsContainer.jsx";
import { SpecialtiesContainer } from "./views/global/SpecialtiesContainer.jsx";
import { DoctorsBySpecialty } from "./views/global/DoctorsBySpecialty.jsx";
import { DoctorDetail } from "./views/patient/DoctorDetail.jsx";
import { TestPhoto } from "./views/global/TestPhoto.jsx";
import { Account } from "./views/global/Account.jsx";
import { AppointmentsContainer } from "./views/global/AppointmentsContainer.jsx";

const router = createBrowserRouter([
  {
    path: "/",
    element: <DefaultLayout />,
    children: [
      // ! Global routes
      {
        path: "/",
        element: <Navigate to="/overview" />,
      },
      {
        path: "/overview",
        element: <Overview />,
      },
      {
        path: "/unauthorized",
        element: <Unauthorized />,
      },
      // ? Quitar
      {
        path: "/test",
        element: <TestPhoto />,
      },
      // ?
      {
        path: "/specialties",
        element: <SpecialtiesContainer />,
      },
      {
        path: "/specialties/:id/:specialityName",
        element: <DoctorsBySpecialty />,
      },
      {
        path: "/account",
        element: <Account />,
      },
      {
        path: "/myAppointments",
        element: <AppointmentsContainer />,
      },
      // ! User Admin
      {
        path: "/admin",
        element: <Auth allowedRoles={[1]} />,
        children: [
          {
            path: "/admin/users",
            element: <Users />,
          },
        ],
      },
      // ! User Patient
      {
        path: "/patient",
        element: <Auth allowedRoles={[3]} />,
        children: [
          {
            path: "/patient/doctors",
            element: <DoctorsContainer />,
          },
          {
            path: "/patient/doctors/:id",
            element: <DoctorDetail />,
          },
        ],
      },
    ],
    // ! Not token
  },
  {
    path: "/",
    element: <GuestLayout />,
    children: [
      {
        path: "/login",
        element: <Login />,
      },
      {
        path: "/signup",
        element: <Signup />,
      },
    ],
  },
  // ! Not found
  {
    path: "*",
    element: <NotFound />,
  },
]);

export default router;
