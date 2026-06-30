<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudi;

class EstudiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = Estudi::all();
        return response()->json($items);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'string',
            'descripcio' => 'string'          
        ]);

        $item = Estudi::create($validatedData);
        return response()->json($item, 201);
    }

    // Display the specified resource.
    public function show($estudi_id)
    {
        $item = Estudi::findOrFail($estudi_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $estudi_id)
    {
        $item = Estudi::findOrFail($estudi_id);
        $validatedData = $request->validate([
            'nom' => 'string',
            'descripcio' => 'string'          
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($estudi_id)
    {
        $item = Estudi::findOrFail($estudi_id);
        $item->delete();
        return response()->json(null, 204);
    }
}
