<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taller;

class TallerController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $datos = new taller();
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

        return redirect()->route('tallermecanic');
    }
    public function create()
    {
        return view('formularios.formulario1');
    }
    public function ind()
    {
        $registro = taller::all();
        return view('paginas.admtallermecanic', ['registro' => $registro]);
    }

    public function edit($id)
    {
        $registro = taller::findOrFail($id);
        return view('formularios.formulario1', ['registro' => $registro]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $datos = taller::findOrFail($id);
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

        return redirect()->route('tallermecanic')->with('status', 'Producto actualizado con éxito');
    }

    public function destroy($id)
    {
        $datos = taller::findOrFail($id);
        if (file_exists(public_path($datos->imagen))) {
            unlink(public_path($datos->imagen));
        }
        $datos->delete();
        return redirect()->route('tallermecanic')->with('status', 'Producto eliminado con éxito');
    }

    public function index()
    {
        $productos = taller::all(); // Obtén todos los productos
        return view('vistas.taller', compact('productos')); // Pasa los datos a la vista
    }

}

