<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumneOferta;

class AlumneOfertaController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = AlumneOferta::all();
        return response()->json($items);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'alumne_id' => 'required',
            'oferta_id' => 'required',
            'data_interes' => 'nullable',
            'vist_empresa' => 'nullable'

        ]);

        $item = AlumneOferta::create($validatedData);
        return response()->json($item, 201);
    }

    // Display the specified resource.
    public function show($alumne_oferta_id)
    {
        $item = AlumneOferta::findOrFail($alumne_oferta_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $alumne_oferta_id)
    {
        $item = AlumneOferta::findOrFail($alumne_oferta_id);
        $validatedData = $request->validate([
            // Validation rules
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($alumne_oferta_id)
    {
        $item = AlumneOferta::findOrFail($alumne_oferta_id);
        $item->delete();
        return response()->json(null, 204);
    }
}
