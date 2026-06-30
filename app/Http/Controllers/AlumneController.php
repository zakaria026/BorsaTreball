<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumne;

class AlumneController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = Alumne::all();
        return response()->json($items);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'string',
            'primer_cognom' => 'string',
            'segon_cognom' => 'string',
            'dni' => 'string',
            'adreca' => 'string',
            'codi_postal' => 'string',
            'municipi' => 'string',
            'provincia' => 'string',
            'data_naixement' => 'string',
            'primer_telefon' => 'nullable|string',
            'segon_telefon' => 'nullable|string',
            'carnet_conduir' => 'nullable|string',
            'idioma1' => 'nullable|string',
            'idioma2' => 'nullable|string',
            'idioma3' => 'nullable|string',
            'idioma4' => 'nullable|string',
            'observacions' => 'nullable|string',
            'usuari_id' => 'integer', // Afegit el camp usuari_id
        ]);

        $item = Alumne::create($validatedData);
        return response()->json($item, 201);
    }

    // Display the specified resource.
    public function show($alumne_id)
    {
        $item = Alumne::findOrFail($alumne_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $alumne_id)
    {
        $item = Alumne::findOrFail($alumne_id);
        $validatedData = $request->validate([
            'nom' => 'string',
            'primer_cognom' => 'string',
            'segon_cognom' => 'string',
            'dni' => 'string',
            'adreca' => 'string',
            'codi_postal' => 'string',
            'municipi' => 'string',
            'provincia' => 'string',
            'data_naixement' => 'string',
            'primer_telefon' => 'nullable|string',
            'segon_telefon' => 'nullable|string',
            'carnet_conduir' => 'nullable|string',
            'idioma1' => 'nullable|string',
            'idioma2' => 'nullable|string',
            'idioma3' => 'nullable|string',
            'idioma4' => 'nullable|string',
            'observacions' => 'nullable|string',
            'usuari_id' => 'integer', // Afegit el camp usuari_id
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($alumne_id)
    {
        $item = Alumne::findOrFail($alumne_id);
        $item->delete();
        return response()->json(null, 204);
    }

}
