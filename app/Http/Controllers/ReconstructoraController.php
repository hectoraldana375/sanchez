<?php

namespace App\Http\Controllers;

use App\Models\Reconstructora; // Asegúrate de que la clase del modelo esté correctamente nombrada
use Illuminate\Http\Request;

class ReconstructoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admreparaciones()
    {
        // Aquí va la lógica para la vista del administrador de reparaciones
        return view('paginas.adminreparaciones');  // Cambia 'admin.reparaciones' a la ruta de tu vista
    }


    public function index()
    {
        // Obtiene todos los servicios
        $services = Reconstructora::all();
        $backgroundImage = $services->isNotEmpty() ? $services->first()->background_image : 'images/default.jpg';

        return view('paginas.admreparaciones', compact('services', 'backgroundImage'));
    }

    public function create()
    {
        return view('formularios.formulario2');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $datos = new Reconstructora();
        $datos->name = $validatedData['name'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $datos->image = 'images/' . $imageName;
        }
        if ($request->hasFile('background_image')) {
            $backgroundImage = $request->file('background_image');
            $backgroundImageName = time() . '_background.' . $backgroundImage->getClientOriginalExtension();
            $backgroundImage->move(public_path('images'), $backgroundImageName);
            $datos->background_image = 'images/' . $backgroundImageName;
        }
        $datos->save();
        return redirect()->route('reparaciones')->with('success', 'Servicio creado correctamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Reconstructora $reconstructora)
    {
        // Implementa la lógica para mostrar un servicio específico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       ;
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }


    public function ind()
    {
        // Obtiene todos los servicios
        $services = Reconstructora::all();
        $backgroundImage = $services->isNotEmpty() ? $services->first()->background_image : 'images/default.jpg';

        return view('vistas.reconstructora', compact('services', 'backgroundImage'));
    }



}
