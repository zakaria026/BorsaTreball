<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfertaEstudi;

class OfertaEstudiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = OfertaEstudi::all();
        return response()->json($items);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Validation rules
        ]);

        $item = OfertaEstudi::create($validatedData);
        return response()->json($item, 201);
    }

    // Display the specified resource.
    public function show($oferta_estudi_id)
    {
        $item = OfertaEstudi::findOrFail($oferta_estudi_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $oferta_estudi_id)
    {
        $item = OfertaEstudi::findOrFail($oferta_estudi_id);
        $validatedData = $request->validate([
            // Validation rules
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($oferta_estudi_id)
    {
        $item = OfertaEstudi::findOrFail($oferta_estudi_id);
        $item->delete();
        return response()->json(null, 204);
    }
}
