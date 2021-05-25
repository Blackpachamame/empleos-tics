<?php

namespace App\Http\Controllers;

use App\Models\busquedas;
use App\Models\rubros;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
    public function index()
    {
        $busquedas = busquedas::get();
        return view('busquedas.index')->with('col', $busquedas);
    }
    public function show($rubro)
    {
        $busquedas = busquedas::where('idRubro', $rubro)->get();
        return view('busquedas.show')->with('col', $busquedas);
    }
}
