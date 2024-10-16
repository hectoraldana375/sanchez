<?php

namespace App\Http\Controllers;

use App\Models\kits;
use Illuminate\Http\Request;

class KitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kits = Kits::all();
        return view('paginas.admkits', compact('kits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.formulario7');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar datos
        $request->validate([
            'aplicacion' => 'required',
            'marca' => 'required',
            'precio' => 'required|numeric',
            'observaciones' => 'nullable',
        ]);

        // Asegurar que los datos estén en formato de array
        $aplicaciones = is_array($request->aplicacion) ? $request->aplicacion : [$request->aplicacion];
        $marcas = is_array($request->marca) ? $request->marca : [$request->marca];
        $precios = is_array($request->precio) ? $request->precio : [$request->precio];
        $observaciones = is_array($request->observaciones) ? $request->observaciones : [$request->observaciones];

        // Procesar los datos
        foreach ($aplicaciones as $key => $aplicacion) {
            Kits::create([
                'aplicacion' => $aplicacion,
                'marca' => $marcas[$key] ?? null,
                'precio' => $precios[$key] ?? null,
                'observaciones' => $observaciones[$key] ?? null,
            ]);
        }

        return redirect()->route('kitss')->with('success', 'Kits agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kits $kits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kits $kit)
    {
        return view('formularios.formulario7', compact('kit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kits $kit)
    {
        // Validar datos
        $request->validate([
            'aplicacion' => 'required',
            'marca' => 'required',
            'precio' => 'required|numeric',
            'observaciones' => 'nullable',
        ]);

        // Actualizar el kit
        $kit->update([
            'aplicacion' => $request->aplicacion,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'observaciones' => $request->observaciones,
        ]);

        return redirect()->route('kitss')->with('success', 'Kit actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kits $kit)
    {
        $kit->delete();
        return redirect()->route('kitss')->with('success', 'Kit eliminado exitosamente.');
    }

    public function ind()
    {
        $kits = kits::all();
        return view('vistas.kits', compact('kits'));
    }

}
