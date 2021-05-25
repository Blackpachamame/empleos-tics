<?php

namespace App\Http\Controllers;

use App\Models\inscripciones;
use App\Models\busquedas;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    public function index()
    {
        $inscripciones = inscripciones::all();
        return view("inscripciones.index", compact('inscripciones'));
    }
    public function create($busquedas)
    {
        return view("inscripciones.create")->with('busquedas', $busquedas);
    }
    public function store(Request $request)
    {
        $fecha = date("Y-m-d");
        $nuevaInscripcion = new inscripciones();
        $nuevaInscripcion->nombre = $request->nombre;
        $nuevaInscripcion->apellido = $request->apellido;
        $nuevaInscripcion->idBusqueda = $request->idBusqueda;
        $nuevaInscripcion->fecha = $fecha;
        //return $nuevaInscripcion;
        $nuevaInscripcion->save();

        return redirect()->route("inscripciones.index");
    }

    public function show($inscripcion)
    {
        // compact('rubro'); equivale a poner 'rubro'=>$rubro
        return view("inscripciones.show", compact('inscripciones', $inscripcion));
    }
}
