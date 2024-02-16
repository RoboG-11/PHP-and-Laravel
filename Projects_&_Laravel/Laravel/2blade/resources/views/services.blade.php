@extends('layouts.landing')

@section('title', 'Services')

@section('content')

<h1>SERVICES</h1>

@component('_components.card')
@slot('title', 'Services 1')
@slot('content', 'lorem...........')
@endcomponent

@component('_components.card')
@slot('title', 'Services 1')
@slot('content')
<h3>EXAMPLE</h3>
@endslot
@endcomponent
@endsection
