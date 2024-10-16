<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reconstructora extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'background_image',
    ];
}
