@extends('layouts.app')
@section('content')

<h1>Busquedas encontradas</h1>
@foreach($col as $busqueda)
<ul>
    <li>Id Busqueda: {{ $busqueda->idBusqueda }}</li>
    <li>Empresa: {{ $busqueda->empresa }}</li>
    <li>Título: {{ $busqueda->titulo }}</li>
    <li>Descripción: {{ $busqueda->descripcion }}</li>
</ul>
@endforeach
@stop