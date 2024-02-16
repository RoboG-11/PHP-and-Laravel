@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">BACK</a>

    <form method="POST" action="{{ route('note.update', $note->id) }}">
        {{-- De esta manera se 'modifica' el metod para que sea PUT --}}
        @method('PUT')
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" id="" value="{{ $note->title }}"><br>
        @error('title') {{-- Directiva de eror --}}
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description" id="" value="{{ $note->description }}"><br>
        @error('description') {{-- Directiva de eror --}}
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Update">
    </form>
@endsection
