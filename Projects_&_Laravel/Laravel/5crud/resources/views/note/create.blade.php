@extends('layouts.app')

{{-- NOTE: Se pueden 'recoger errores' --}}
{{-- @if($errors->any()) Si existe algun error 
    <ul>
        @foreach($errors->all() as $error) Se recolectan todos los errores
            <li>{{ $error }}</li>
        @endforeach    
    </ul>    
@endif --}}

@section('content')
    <a href="{{ route('note.index') }}">Back</a>

    <form method="POST" action="{{ route('note.store') }}">
        @csrf <!-- WARNING: Esto es por SEGURIDAD!!!!!!!! -->

        {{-- NOTE: En caso de que se quieramodificar el estilo cuando haya un error--}}
        {{-- <input type="text" name="title" id="" class="@error('title') danger @enderror"> <br> --}}

        <label for="">Title:</label>
        <input type="text" name="title" id=""> <br>
        @error('title') {{-- Directiva de eror --}}
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description" id=""><br>
        @error('description') {{-- Directiva de eror --}}
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create" name="" id="">
    </form>
@endsection
