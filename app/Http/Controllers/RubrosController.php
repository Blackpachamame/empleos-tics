<?php

namespace App\Http\Controllers;

use App\Models\busquedas;
use App\Models\rubros;
use Illuminate\Http\Request;

class RubrosController extends Controller
{
    public function index()
    {
        $rubros = rubros::get();
        return view('rubros.index')->with('col', $rubros);
    }
    public function create()
    {
        return view('rubros.create');
    }
    public function show(rubros $rubro)
    {
        $busquedas = busquedas::where('idRubro', $rubro->idRubro)->get();
        return view('rubros.show')->with('col', $busquedas);
    }
}
