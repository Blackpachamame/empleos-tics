@extends('layouts.app')
@section('titlePage','Rubros')
@section('content')
<h1 class="text-primary">Lista de Rubros</h1>

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
                <a href="{{ route('busquedas.show', $rubro->idRubro) }}" class="btn btn-info">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop