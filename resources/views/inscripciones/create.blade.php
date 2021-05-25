@extends('layouts.app')
@section('content')
<h1 class="text-primary">Inscribirse en una búsqueda</h1>

<form class="row gy-2 gx-3 align-items-center" action="{{route('inscripciones.store')}}" method='POST'>
    @csrf
    <div class="col-auto">
        <input type="text" class="form-control" name='nombre' id="autoSizingInput" placeholder="Nombre">
    </div>
    <div class="col-auto">

        <input type="text" class="form-control" name='apellido' id="autoSizingInputGroup" placeholder="Apellido">
    </div>
    <div class="col-auto">
        <input type="text" id="idBusqueda" name="idBusqueda" value="{{ $busquedas }}" readonly>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-secondary p-2">Enviar</button>
    </div>
</form>
@endsection