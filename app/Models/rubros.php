<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rubros extends Model
{
    use HasFactory;
    protected $table = 'rubros';
    protected $primaryKey = 'idRubro';
    /* Definimos los campos de la tabla directamente en la variable de tipo array $fillable */
    protected $fillable = array('idRubro', 'descripcion');
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
