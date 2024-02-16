<!-- 
Lo que está en doble llave es para poder utiliza
código de laravel.
route{{'x'}} sirve para utilizar el nombre y no la ruta, esto
hace que sea más mantenible
-->

<header>
  <nav>
    <ul>
      <li><a href="{{route('index')}}">Home</a></li>
      <li><a href="{{route('about')}}">About</a></li>
      <li><a href="{{route('services')}}">Services</a></li>
    </ul>
  </nav>
</header>
