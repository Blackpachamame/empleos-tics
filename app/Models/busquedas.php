<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class busquedas extends Model
{
    use HasFactory;
    protected $table = 'busquedas';
    protected $primaryKey = 'idBusqueda';
    /* Definimos los campos de la tabla directamente en la variable de tipo array $fillable */
    protected $fillable = array('idBusqueda', 'idRubro', 'empresa', 'titulo', 'descripcion');
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
