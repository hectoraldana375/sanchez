<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si no sigue la convención
    protected $table = 'features';

    // Define los atributos que pueden ser asignados en masa
    protected $fillable = ['titulo', 'description', 'imagen'];

    // Si deseas desactivar la gestión automática de timestamps, comenta la siguiente línea
    // public $timestamps = false;
}
