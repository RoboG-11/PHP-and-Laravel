// import { useRef } from "react";
// import axiosClient from "../../axios-client"; // Asegúrate de importar axiosClient
// import { useState } from "react"; // Importa useState si aún no está importado

// export const TestPhoto = () => {
//   const [errors, setErrors] = useState(null); // Agrega el estado para manejar errores
//   const fileRef = useRef(null);

//   const onSubmit = (ev) => {
//     ev.preventDefault();

//     const formData = new FormData();
//     formData.append("file", fileRef.current.files[0]);

//     axiosClient
//       .put(`/api/users/${userId}`, formData)
//       .then(({ data }) => {
//         console.log(data);
//       })
//       .catch((err) => {
//         const response = err.response;
//         // Si hay una respuesta y el estado de la respuesta es 422, es un error de validación
//         if (response && response.status === 422) {
//           setErrors(response.data.errors);
//         }
//       });
//   };

//   return (
//     <>
//       <form onSubmit={onSubmit}>
//         <input ref={fileRef} type="file" placeholder="File" />
//         <br />
//         <input type="submit" value="send" />
//       </form>
//       {errors && (
//         <div>
//           <p>Error en la subida del archivo:</p>
//           <ul>
//             {Object.values(errors).map((error, index) => (
//               <li key={index}>{error}</li>
//             ))}
//           </ul>
//         </div>
//       )}
//     </>
//   );
// };

// import { useRef, useState } from "react";
// import axiosClient from "../../axios-client";

// export const TestPhoto = () => {
//   const [errors, setErrors] = useState(null);
//   const fileRef = useRef(null);
//   const userId = User.id;

//   const onSubmit = async (ev) => {
//     ev.preventDefault();
//     console.log("Se hizo clic en el botón de envío");

//     try {
//       const formData = new FormData();
//       formData.append("file", fileRef.current.files[0]);

//       const { data } = await axiosClient.put(`/api/users/${userId}`, formData);
//       console.log("Solicitud exitosa. Respuesta del servidor:", data);
//     } catch (err) {
//       console.log("Error en la solicitud:", err);
//       if (err.response && err.response.status === 422) {
//         setErrors(err.response.data.errors);
//       }
//     }
//   };

//   return (
//     <div>
//       <form onSubmit={onSubmit}>
//         <input type="file" ref={fileRef} />
//         <br />
//         <button type="submit">Send</button>
//       </form>
//       {errors && (
//         <div>
//           <p>Error en la subida del archivo:</p>
//           <ul>
//             {Object.values(errors).map((error, index) => (
//               <li key={index}>{error}</li>
//             ))}
//           </ul>
//         </div>
//       )}
//     </div>
//   );
// };


// import { useRef, useState } from "react";
// import axiosClient from "../../axios-client";

// export const TestPhoto = ({ userId }) => {
//   const [errors, setErrors] = useState(null);
//   const fileRef = useRef(null);

//   const onSubmit = async (ev) => {
//     ev.preventDefault();
//     console.log("Se hizo clic en el botón de envío");

//     try {
//       const formData = new FormData();
//       formData.append("file", fileRef.current.files[0]);

//       const { data } = await axiosClient.put(`users/${userId}`, formData);
//       console.log("Solicitud exitosa. Respuesta del servidor:", data);
//     } catch (err) {
//       console.log("Error en la solicitud:", err);
//       if (err.response && err.response.status === 422) {
//         setErrors(err.response.data.errors);
//       }
//     }
//   };

//   return (
//     <div>
//       <form onSubmit={onSubmit}>
//         <input type="file" name="file" ref={fileRef} placeholder="File" />
//         <br />
//         <button type="submit">Send</button>
//       </form>
//       {errors && (
//         <div>
//           <p>Error en la subida del archivo:</p>
//           <ul>
//             {Object.values(errors).map((error, index) => (
//               <li key={index}>{error}</li>
//             ))}
//           </ul>
//         </div>
//       )}
//     </div>
//   );
// };

import { useRef, useState } from "react";
import axiosClient from "../../axios-client";

export const TestPhoto = ({ userId }) => {

  const [image, setImage] = useState(null)

  const onImageChange = (event) => {
    if (event.target.files && event.target.files[0]) {
      setImage(event.target.files[0]);
    }
  }

  const onSubmit = async (ev) => {
    ev.preventDefault();
    console.log("Se hizo clic en el botón de envío");
    const payload = {
      link_photo: image
    }

    try {

      const { data } = await axiosClient.put(`users/${userId}`, payload);
      console.log("Solicitud exitosa. Respuesta del servidor:", data);
    } catch (err) {
      console.log("Error en la solicitud:", err);
      if (err.response && err.response.status === 422) {
        setErrors(err.response.data.errors);
      }
    }
  };

  return (
    <div>
      <form onSubmit={onSubmit}>
        <input type="file" onChange={onImageChange} className="filetype" />
        <button type="submit">Send</button>
      </form>
      <img alt="preview image" src={image} />
    </div>
  )
  // const [errors, setErrors] = useState(null);
  // const fileRef = useRef(null);

  // const onSubmit = async (ev) => {
  //   ev.preventDefault();
  //   console.log("Se hizo clic en el botón de envío");

  //   try {
  //     const formData = new FormData();
  //     formData.append("link_photo", fileRef.current.files[0]); // Cambiado "file" a "link_photo"

  //     const { data } = await axiosClient.put(`users/${userId}`, formData);
  //     console.log("Solicitud exitosa. Respuesta del servidor:", data);
  //   } catch (err) {
  //     console.log("Error en la solicitud:", err);
  //     if (err.response && err.response.status === 422) {
  //       setErrors(err.response.data.errors);
  //     }
  //   }
  // };

  // return (
  //   <div>
  //     <form onSubmit={onSubmit}>
  //       <input type="file" name="link_photo" ref={fileRef} placeholder="File" /> {/* Cambiado "file" a "link_photo" */}
  //       <br />
  //       <button type="submit">Send</button>
  //     </form>
  //     {errors && (
  //       <div>
  //         <p>Error en la subida del archivo:</p>
  //         <ul>
  //           {Object.values(errors).map((error, index) => (
  //             <li key={index}>{error}</li>
  //           ))}
  //         </ul>
  //       </div>
  //     )}
  //   </div>
  // );
};

