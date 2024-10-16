<?php

namespace App\Http\Controllers;

use App\Models\camiones;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $productos = camiones::all(); // Obtén todos los productos
    return view('vistas.camiones', compact('productos')); // Pasa los datos a la vista
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.formulario4');
    }

    public function ind()
    {
        $registro = camiones::all();
        return view('paginas.admcamiones', ['registro' => $registro]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $datos = new camiones();
        $datos->titulo = $validatedData['titulo'];
        $datos->descripcion = $validatedData['descripcion'];
        $datos->precio = $validatedData['precio'];

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $datos->imagen = 'images/'.$imageName;
        }
        $datos->save();

        return redirect()->route('camioness');
    }

    /**
     * Display the specified resource.
     */
    public function show(camiones $camiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(camiones $camiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, camiones $camiones)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $datos = camiones::findOrFail($id);
        $datos->titulo = $validatedData['titulo'];
        $datos->descripcion = $validatedData['descripcion'];
        $datos->precio = $validatedData['precio'];

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $datos->imagen = 'images/'.$imageName;
        }

        $datos->save();

        return redirect()->route('camioness')->with('status', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datos = camiones::findOrFail($id);
        if (file_exists(public_path($datos->imagen))) {
            unlink(public_path($datos->imagen));
        }
        $datos->delete();
        return redirect()->route('camioness')->with('status', 'Producto eliminado con éxito');
    }
}

