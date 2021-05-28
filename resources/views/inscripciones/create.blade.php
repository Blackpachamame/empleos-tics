@extends('layouts.app')
@section('content')

<h2 class="text-primary">Inscribirse en una búsqueda</h2>

<div class="pt-3 pb-5">
    <form class="row g-3" action="{{route('inscripciones.store')}}" method='POST'>
        @csrf
        <div class="col-auto">
            <label for="autoSizingInput" class="visually-hidden">Nombre</label>
            <input type="text" class="form-control" name='nombre' id="autoSizingInput" placeholder="Nombre">
        </div>
        <div class="col-auto">
            <label for="autoSizingInputGroup" class="visually-hidden">Apellido</label>
            <input type="text" class="form-control" name='apellido' id="autoSizingInputGroup" placeholder="Apellido">
        </div>
        <div class="col-auto">
            <label for="idBusqueda" class="visually-hidden">Id Búsqueda</label>
            <input type="text" class="form-control" name="idBusqueda" id="idBusqueda" value="{{ $busquedas }}" readonly>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
    </form>
</div>
@endsection