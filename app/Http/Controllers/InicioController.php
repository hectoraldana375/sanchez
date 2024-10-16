<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;
use App\Models\Feature;
use App\Models\History;
use App\Models\Inicio; // Este es el modelo principal que usas para manejar los otros modelos
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Show the form for creating a new carousel image.
     */
    public function createCarouselImage()
{
    // Aquí se retorna la vista del formulario correctamente
    return view('formularios.create_carousel_image');
}


public function storeCarouselImage(Request $request)
{
    // Verifica si 'imagen' está presente en la solicitud
    if ($request->hasFile('imagen')) {
        // Validar la solicitud
        $validatedData = $request->validate([
            'imagen.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Procesar cada imagen
        foreach ($request->file('imagen') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/carousel'), $imageName);

            CarouselImage::create([
                'imagen' => 'images/carousel/' . $imageName,
            ]);
        }

        return redirect()->route('paginas.adminicio')->with('status', 'Imágenes subidas exitosamente');
    } else {
        return redirect()->back()->with('error', 'No se han subido imágenes.');
    }
}
    /**
     * Show the form for creating a new history entry.
     */
    public function createHistory()
    {
        return view('formularios.create_history');
    }

    /**
     * Store a newly created history entry in storage.
     */
    public function storeHistory(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        History::updateOrCreate(
            ['id' => 1], // Asume que hay un único registro para la historia
            $validatedData
        );

        return redirect()->route('paginas.adminicio')->with('status', 'Mensaje de éxito');
    }

    /**
     * Show the form for creating a new feature.
     */
    public function createFeature()
    {
        return view('formularios.create_feature');
    }

    /**
     * Store a newly created feature in storage.
     */
    public function storeFeature(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'description' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('imagen');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/features'), $imageName);

        Feature::create([
            'titulo' => $validatedData['titulo'],
            'description' => $validatedData['description'],
            'imagen' => 'images/features/'.$imageName,
        ]);

        return redirect()->route('paginas.adminicio')->with('status', 'Mensaje de éxito');
    }

    /**
     * Display the resource.
     */
    public function index()
    {
        $carouselImages = CarouselImage::all()->pluck('imagen');
        $history = History::first();
        $features = Feature::all();

        $data = [
            'heroImages' => $carouselImages,
            'historyText' => $history ? $history->descripcion : 'Historia no disponible',
            'features' => $features
        ];

        return view('paginas.adminicio', $data);
    }

    public function ind()
    {
        $carouselImages = CarouselImage::all()->pluck('imagen');
        $history = History::first();
        $features = Feature::all();

        $data = [
            'heroImages' => $carouselImages,
            'historyText' => $history ? $history->descripcion : 'Historia no disponible',
            'features' => $features
        ];

        return view('vistas.inicio', $data);
    }



    public function editHistory()
    {
        $history = History::first(); // Obtener la historia existente
        return view('paginas.adminicio', compact('history'));
    }

    // Actualiza la historia en la base de datos
    public function updateHistory(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $history = History::first(); // Obtener la historia existente
        $history->text = $request->input('text');
        $history->save();

        return redirect()->route('paginas.adminicio')->with('success', 'Historia actualizada exitosamente.');
    }

    // Muestra la vista para editar una característica
    public function editFeature($id)
    {
        $feature = Feature::findOrFail($id); // Obtener la característica existente
        return view('paginas.adminicio', compact('feature'));
    }

    // Actualiza una característica en la base de datos
    public function updateFeature(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'description' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $feature = Feature::findOrFail($id); // Obtener la característica existente
        $feature->titulo = $request->input('titulo');
        $feature->description = $request->input('description');

        // Manejo de la imagen si se sube una nueva
        if ($request->hasFile('imagen')) {
            // Aquí puedes agregar la lógica para guardar la nueva imagen
            $path = $request->file('imagen')->store('images', 'public');
            $feature->imagen = $path;
        }

        $feature->save();

        return redirect()->route('paginas.adminicio')->with('success', 'Característica actualizada exitosamente.');
    }

    // Elimina la historia
    public function destroyHistory()
    {
        $history = History::first(); // Obtener la historia existente
        $history->delete();

        return redirect()->route('paginas.adminicio')->with('success', 'Historia eliminada exitosamente.');
    }

    // Elimina una característica
    public function destroyFeature($id)
    {
        $feature = Feature::findOrFail($id); // Obtener la característica existente
        $feature->delete();

        return redirect()->route('paginas.adminicio')->with('success', 'Característica eliminada exitosamente.');
    }




}

