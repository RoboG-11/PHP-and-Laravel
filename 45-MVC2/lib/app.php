<?php

class App
{

  function __construct()
  {
    echo "<p>Nueva app</p>";

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    // var_dump($url);
    $archivoController = 'controller/' . $url[0] . '.php';

    if (file_exists($archivoController)) {
      require_once $archivoController;
      $controller = new $url[0];

      if (isset($url[1])) {
        $controller->{$url[1]}();
      }
    } else {
      require_once 'controller/error.php';
    }
  }
}

?>
