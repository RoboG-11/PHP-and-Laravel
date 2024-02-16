import { useLocation, Navigate, Outlet } from "react-router-dom";
import { useContext } from "react";
import { useStateContext } from "../contexts/ContextProvider";

import React from "react";

export const Auth = ({ allowedRoles }) => {
  const { user } = useStateContext();
  const location = useLocation();

  return allowedRoles.find((role) => role === user.rol) ? (
    <Outlet />
  ) : user?.name ? (
    <Navigate to="/unauthorized" state={{ from: location }} replace />
  ) : (
    <Navigate to="/signup" state={{ from: location }} replace />
  );
};
