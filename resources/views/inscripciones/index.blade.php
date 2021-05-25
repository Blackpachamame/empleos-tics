@extends('layouts.app')
@section('titlePage','Inscripciones')
@section('content')
<h1 class="text-primary">Lista de Inscripciones</h1>

<table class="table table-bordered bg-light p-2" id="tableInscripciones">
    <thead>
        <tr>
            <th class="text-center">Id Inscripcion</th>
            <th class="text-center">Id Busqueda</th>
            <th class="text-center">Fecha</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Nombre</th>
        </tr>
    </thead>
    <tbody>

        @foreach($inscripciones as $inscripcion)
        <tr>
            <td class="text-center">{{ $inscripcion->idInscripcion}}</td>
            <td class="text-center">{{ $inscripcion->idBusqueda}}</td>
            <td class="text-center">{{ $inscripcion->fecha}}</td>
            <td class="text-center">{{ $inscripcion->apellido}}</td>
            <td class="text-center">{{ $inscripcion->nombre}}</td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection