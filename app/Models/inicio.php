<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;

    public function getCarouselImages()
    {
        return CarouselImage::pluck('imagen')->toArray();
    }

    public function getHistory()
    {
        return History::first();
    }

    public function getFeatures()
    {
        return Feature::all();
    }

    // Definir los modelos internos
    public static function CarouselImage()
    {
        return new class extends Model {
            use HasFactory;
            protected $table = 'carousel_images';
            protected $fillable = ['imagen'];
        };
    }

    public static function History()
    {
        return new class extends Model {
            use HasFactory;
            protected $table = 'histories';
            protected $fillable = ['titulo', 'descripcion'];
        };
    }

    public static function Feature()
    {
        return new class extends Model {
            use HasFactory;
            protected $table = 'features';
            protected $fillable = ['titulo', 'description', 'imagen'];
        };
    }
}
