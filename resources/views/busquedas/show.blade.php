@extends('layouts.app')
@section('content')

<h2 class="text-center text-primary">Búsquedas encontradas</h2>
<!-- @foreach($col as $busqueda)
<ul>
    <li>Id Busqueda: {{ $busqueda->idBusqueda }}</li>
    <li>Empresa: {{ $busqueda->empresa }}</li>
    <li>Título: {{ $busqueda->titulo }}</li>
    <li>Descripción: {{ $busqueda->descripcion }}</li>
    <li><a href="{{ route('inscripciones.create', $busqueda->idBusqueda) }}" class="btn btn-info">Incribirse</a></li>
</ul>
@endforeach -->

<!-- <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    @foreach($col as $busqueda)
    <div class="col d-flex align-items-start">
        <div class="icon-square text-dark flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <div>
            <h4>Busqueda n°{{ $busqueda->idBusqueda }}</h4>
            <div class="pb-2">
                <p class="mb-0"><strong>Empresa:</strong> {{ $busqueda->empresa }}</p>
                <p class="mb-0"><strong>Título:</strong> {{ $busqueda->titulo }}</p>
                <p class="mb-0"><strong>Descripción:</strong> {{ $busqueda->descripcion }}</p>
            </div>
            <a href="{{ route('inscripciones.create', $busqueda->idBusqueda) }}" class="btn btn-primary">
                Incribirse
            </a>
        </div>
    </div>
    @endforeach
</div> -->

<div class="row row-cols-1 row-cols-md-3 pt-3 pb-4">
    @foreach($col as $busqueda)
    <div class="col mb-4">
        <div class="card h-100 rounded-3 shadow-sm border-blue">
            <div class="card-header pt-3 pb-2 text-white bg-blue border-blue">
                <h4 class="fw-normal text-center">Búsqueda n°{{ $busqueda->idBusqueda }}</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Empresa:</b> {{ $busqueda->empresa }}</li>
                    <li class="list-group-item"><b>Título:</b> {{ $busqueda->titulo }}</li>
                    <li class="list-group-item"><b>Descripción:</b> {{ $busqueda->descripcion }}</li>
                </ul>
            </div>
            <div class="card-footer pt-0 bg-transparent">
                <a href="{{ route('inscripciones.create', $busqueda->idBusqueda) }}" class="w-100 btn btn-lg btn-blue">
                    Incribirse
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop