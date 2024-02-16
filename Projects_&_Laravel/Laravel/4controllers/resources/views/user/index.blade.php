<!doctype html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <h1>User List:</h1>

  {{--@if($users->isEmpty())
  <p>The user list is empty</p>
  @else
    <ul>
    @foreach($users as $user)
    <li>
      {{ $user->name }} --- Edad: {{ $user->age }}
  </li>
  @endforeach
  </ul>
  @endif--}}

  @if(is_a($users, 'App\Models\User'))
  <p>Nombre: {{ $users->name }}</p>
  <p>Edad: {{ $users->age }}</p>

  @elseif(!$users->isEmpty())
  <ul>
    @foreach($users as $user)
    <li>
      {{ $user['name'] }} --- Edad: {{ $user['age'] }}
    </li>
    @endforeach
  </ul>
  @else

  <p>No se pudo encontrar información de usuario</p>
  @endif




</body>

</html>
