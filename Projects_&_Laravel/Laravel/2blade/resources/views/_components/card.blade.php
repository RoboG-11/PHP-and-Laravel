<!-- 
El método asset sirve para cargar contenido estatico de la
carpeta public
-->

<div style="border: 3px solid red; margin: 3rem;">
  <h3>{{ $title }}</h3>
  <img src="{{asset('assets/img/WallpaperDog-20511409.jpg')}}" alt="image" width="200px">
  <p>
    {{ $content }}
  </p>
</div>
