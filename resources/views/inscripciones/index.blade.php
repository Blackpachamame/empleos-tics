@extends('layouts.app')
@section('content')

<h2 class="text-center text-primary">Lista de Inscripciones</h2>

<div class="table-responsive pt-3 pb-4">
    <table class="table table-bordered bg-light" id="tableInscripciones">
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
</div>
@endsection