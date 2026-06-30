<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumneEstudi;

class AlumneEstudiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = AlumneEstudi::all();
        return response()->json($items);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Validation rules
        ]);

        $item = AlumneEstudi::create($validatedData);
        return response()->json($item, 201);
    }

    // Display the specified resource.
    public function show($alumne_estudi_id)
    {
        $item = AlumneEstudi::findOrFail($alumne_estudi_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $alumne_estudi_id)
    {
        $item = AlumneEstudi::findOrFail($alumne_estudi_id);
        $validatedData = $request->validate([
            // Validation rules
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($alumne_estudi_id)
    {
        $item = AlumneEstudi::findOrFail($alumne_estudi_id);
        $item->delete();
        return response()->json(null, 204);
    }
}
