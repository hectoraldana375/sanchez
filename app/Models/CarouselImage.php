<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    protected $table = 'carousel_images'; // Nombre de la tabla en la base de datos
    protected $fillable = ['image_path']; // Columnas que se pueden llenar masivamente
}
