<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\Empresa;
use App\Models\AlumneOferta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class OfertaController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $items = Oferta::all();
        return response()->json($items);
    }

    public function store(Request $request)
{
        $validatedData = $request->validate([
            'horari' => 'required|string',
            'incorporacio' => 'required|string',
            'sou' => 'required|string',
            'edat' => 'required|string',
            'idioma1' => 'nullable|string',
            'idioma2' => 'nullable|string',
            'idioma3' => 'nullable|string',
            'idioma4' => 'nullable|string',
            'tipus_contracte' => 'required|string',
            'caducitat_oferta' => 'required|string',
            'descripcio' => 'required|string',
            'empresa_id' => 'required|integer',
        ]);
  
        $item = Oferta::create($validatedData);


        $empresa = Empresa::findOrFail($request->empresa_id);
        return redirect()->intended('panell-empresa')
        ->with('alert', ['type' => 'success', 'message' => 'Oferta creada correctament.'])
        ->with('empresa', $empresa);

        //return response()->json($item, 201);
}


    // Display the specified resource.
    public function show($oferta_id)
    {
        $item = Oferta::findOrFail($oferta_id);
        return response()->json($item);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $oferta_id)
    {
        $item = Oferta::findOrFail($oferta_id);
        $validatedData = $request->validate([
            'horari' => 'string',
            'incorporacio' => 'string',
            'sou' => 'string',
            'edat' => 'string',
            'idioma1' => 'nullable|string',
            'idioma2' => 'nullable|string',
            'idioma3' => 'nullable|string',
            'idioma4' => 'nullable|string',
            'tipus_contracte' => 'string',
            'caducitat_oferta' => 'string',
            'descripcio' => 'string'
        ]);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Remove the specified resource from storage.
    public function destroy($oferta_id)
    {
        $item = Oferta::findOrFail($oferta_id);
        $item->delete();
        return response()->json(null, 204);
    }

    
    // Método de búsqueda
    public function search(Request $request)
{
    $query = $request->input('query');

    // Realiza la búsqueda en el modelo de ofertas
    $results = Oferta::where('descripcio', 'LIKE', "%{$query}%")
                     ->orWhereHas('empresa', function ($q) use ($query) {
                         $q->where('nom', 'LIKE', "%{$query}%");
                     })
                     ->get();

    // Devuelve los resultados a la vista de búsqueda
    return view('search_results', compact('results'));
}

public function getOfertaDetails($id)
{
    $oferta = Oferta::with('empresa')->findOrFail($id);
    $alert = session('alert');
    return view('web.sections.oferta')->with('oferta', $oferta)->with('alert', $alert);
}

public function inscribirse(Request $request, $id)
    {
        
        $alumne = Auth::user()->alumne;
        $oferta = Oferta::findOrFail($id);
  
        $response = Http::post('http://p4.cfinformatica.org/alumne_ofertes', [
            'alumne_id' => $alumne->alumne_id,
            'oferta_id' => $id
        ]);


        return view('web.sections.oferta' , ['alert' => ['type' => 'success', 'message' => 'Inscrit a la oferta correctament']])->with('oferta', $oferta);
    }

    public function desinscribirse(Request $request, $id_oferta, $id_alumne)
    {
        

        $id_relacio = AlumneOferta::where('alumne_id', $id_alumne)->where('oferta_id', $id_oferta)->firstOrFail()->id;
  
        $oferta = Oferta::findOrFail($id_oferta);

        $response = Http::delete('http://p4.cfinformatica.org/alumne_ofertes/' .$id_relacio);


        return view('web.sections.oferta' , ['alert' => ['type' => 'success', 'message' => 'Desinscrit de la oferta correctament']])->with('oferta', $oferta);
    }
    
    public function AltaOferta()
    {
        return view('components.alta_oferta.alta_oferta');
    }


}

