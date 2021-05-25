<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';
    protected $primaryKey = 'idInscripcion';
    /* Definimos los campos de la tabla directamente en la variable de tipo array $fillable */
    protected $fillable = array('idInscripcion', 'idBusqueda', 'fecha', 'apellido', 'nombre');
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
