<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aceites extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'marca', 'descripcion', 'litros', 'precio'];

}