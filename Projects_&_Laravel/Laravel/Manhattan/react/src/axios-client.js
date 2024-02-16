import axios from "axios";

// * Provide the api base URL
const axiosClient = axios.create({
  baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`,
});

// ! Interceptors are special functions which will be executed
// ! before the the request is sent or after the response is received

// ? Aquí defines un interceptor de solicitudes utilizando axiosClient.interceptors.request.use().
// ? Los interceptores son funciones especiales que se ejecutan antes de que se envíe la solicitud.
// ? En este caso, estás usando un interceptor para agregar el token de acceso almacenado en el
// ? localStorage a los encabezados de todas las solicitudes.
// ? config es el objeto de configuración de la solicitud antes de que se envíe.
// ? localStorage.get("ACCESS_TOKEN") se utiliza para recuperar el token de acceso almacenado en el localStorage.
// ? config.headers.Authorization se establece con el token de acceso en el formato Bearer {token}.
// ? Esto agrega un encabezado de autorización a todas las solicitudes que se envían con este cliente.

axiosClient.interceptors.request.use((config) => {
  const token = localStorage.getItem("ACCESS_TOKEN");
  config.headers.Authorization = `Bearer ${token}`;
  return config;
});

axiosClient.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {
    // * verifica si el código de estado de la respuesta es 401 (no autorizado).
    // * Si es así, el código remueve el token de acceso del localStorage. Esto es comúnmente
    // * utilizado para manejar la expiración del token de acceso o la revocación del mismo.
    // * Al eliminar el token de acceso del localStorage, se asegura de que el usuario tenga que
    // * iniciar sesión nuevamente para obtener un nuevo token de acceso válido.
    try {
      const { response } = error;
      if (response.status === 401) {
        localStorage.removeItem("ACCESS_TOKEN");
      }
    } catch (error) {
      console.error(error);
    }
  }
);

export default axiosClient;
