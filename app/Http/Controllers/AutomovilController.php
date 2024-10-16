<?php

namespace App\Http\Controllers;

use App\Models\automovil;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $productos = automovil::all(); // Obtén todos los productos
    return view('vistas.automovil', compact('productos')); // Pasa los datos a la vista
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.formulario3');
    }

    public function ind()
    {
        $registro = automovil::all();
        return view('paginas.admautomovil', ['registro' => $registro]);
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

        $datos = new automovil();
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

        return redirect()->route('automovill');
    }

    /**
     * Display the specified resource.
     */
    public function show(automovil $automovil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = automovil::findOrFail($id);
        return view('formularios.formulario3', ['registro' => $registro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $datos = automovil::findOrFail($id);
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

        return redirect()->route('automovill')->with('status', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datos = automovil::findOrFail($id);
        if (file_exists(public_path($datos->imagen))) {
            unlink(public_path($datos->imagen));
        }
        $datos->delete();
        return redirect()->route('automovill')->with('status', 'Producto eliminado con éxito');
    }
}
