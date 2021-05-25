@extends('layouts.app')
@section('titlePage','Busquedas')
@section('content')
<h1 class="text-primary">Lista de Busquedas</h1>

<table class="table table-bordered" id="tableRubros">
    <thead>
        <tr>
            <th class="text-center">Id Rubro</th>
            <th class="text-center">Déscripcion</th>
            <th class="text-center">Ver Busquédas por Rubro</th>
        </tr>
    </thead>
    <tbody>
        @foreach($col as $rubro)
        <tr>
            <td class="text-center">{{ $rubro->idRubro }}</td>
            <td class="text-center">{{ $rubro->descripcion }}</td>
            <td>
                <a href="{{ route('inscripciones.show', $busqueda->idBusqueda) }}" class="btn btn-info">Registrarse</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop