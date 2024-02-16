<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index') }}">Regresar pa</a>
    <br>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="Name"><br>
        <input type="file" name="file" id="" placeholder="File"><br>
        <input type="submit" name="" id="" value="send">
    </form>
</body>
</html>