@extends('layouts.app')
@section('content')

<h2 class="text-center text-primary">Lista de Rubros</h2>

<div class="col-lg-6 col-md-8 col-sm-12 pt-3 pb-5">

    <!-- <table class="table table-bordered" id="tableRubros">
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
    </table> -->

    <ul class="list-group rubros">
        <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
            <span class="text-start">Id. Descripción</span>
            <span class="text-end">Busquedas</span>
        </li>
        @foreach($col as $rubro)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $rubro->idRubro }}. {{ $rubro->descripcion }}
            <a href="{{ route('busquedas.show', $rubro->idRubro) }}" class="">Ir</a>
        </li>
        @endforeach
    </ul>
</div>
@stop