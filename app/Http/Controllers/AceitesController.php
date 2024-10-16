<?php

namespace App\Http\Controllers;

use App\Models\aceites;
use Illuminate\Http\Request;

class AceitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aceites = aceites::all();
        return view('paginas.admaceites', compact('aceites'));
    }

    public function create()
    {
        return view('formularios.formulario6');
    }

    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'descripcion' => 'required',
            'litros' => 'required',
            'precio' => 'required',
        ]);

        // Asegurar que los datos estén en formato de array
        $nombres = is_array($request->nombre) ? $request->nombre : [$request->nombre];
        $marcas = is_array($request->marca) ? $request->marca : [$request->marca];
        $descripciones = is_array($request->descripcion) ? $request->descripcion : [$request->descripcion];
        $litros = is_array($request->litros) ? $request->litros : [$request->litros];
        $precios = is_array($request->precio) ? $request->precio : [$request->precio];

        // Procesar los datos
        foreach ($nombres as $key => $nombre) {
            Aceites::create([
                'nombre' => $nombre,
                'marca' => $marcas[$key] ?? null,
                'descripcion' => $descripciones[$key] ?? null,
                'litros' => $litros[$key] ?? null,
                'precio' => $precios[$key] ?? null,
            ]);
        }
        return redirect()->route('aceitess')->with('success', 'Aceites agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(aceites $aceites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aceites $aceite)
{
    return view('formularios.formulario6', compact('aceite'));
}

public function update(Request $request, aceites $aceite)
{
    // Validar datos
    $request->validate([
        'nombre' => 'required',
        'marca' => 'required',
        'descripcion' => 'required',
        'litros' => 'required',
        'precio' => 'required',
    ]);

    // Actualizar el aceite
    $aceite->update([
        'nombre' => $request->nombre,
        'marca' => $request->marca,
        'descripcion' => $request->descripcion,
        'litros' => $request->litros,
        'precio' => $request->precio,
    ]);

    return redirect()->route('aceitess')->with('success', 'Aceite actualizado exitosamente.');
}

public function destroy(aceites $aceite)
{
    $aceite->delete();
    return redirect()->route('aceitess')->with('success', 'Aceite eliminado exitosamente.');
}

    public function ind()
    {
        $aceites = aceites::all();
        return view('vistas.aceites', compact('aceites'));
    }

    




}
