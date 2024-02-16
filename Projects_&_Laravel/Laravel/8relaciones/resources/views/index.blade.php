<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1>{{ $user->email }}</h1>
    <h1>{{ $user->phone }}</h1>
    <h1>Number: {{ $user->phone->phone_number }}</h1> --}}

    {{-- <h1>{{ $user->name }} Phones:</h1>
    <ul>
    @foreach($user->phones as $phone)
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>    
    @endforeach
    </ul>         --}}

    {{-- <h1>{{ $user->name }} Roles:</h1>
    <ul>
        @foreach($user->roles as $rol)
            <li>{{ $rol->name }} Added by: {{ $rol->pivot->added_by }}</li>
        @endforeach
    </ul> --}}

    <h1>{{ $user->image->url }}</h1>
</body>
</html>