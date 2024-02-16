<?php

// var_dump($_FILES["file"]);
$directorio = "uploads/";
$archivo = $directorio . basename($_FILES["file"]["name"]);
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
//vlidar que es imagen
$checarImagen = getimagesize($_FILES["file"]["tmp_name"]);


if ($checarImagen != false) {

  //validando el tamaño del archivo
  $size = $_FILES["file"]["size"];

  if ($size > 500000) {
    echo "La imagen tiene que ser menor a 500kb";
  } else {

    if ($tipoArchivo == "jpg" || $tipoArchivo == "png") {

      //Se validó el archivo correctamente
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
        echo "El archivo se subió correctamente";
      } else {
        echo "Hubo error al subir el archivo";
      }
    } else {
      echo "Solo se admiten archivos jpg o png";
    }
  }
} else {
  echo "El archivo no es una imagen";
}
