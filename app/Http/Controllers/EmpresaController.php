<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Oferta;

class EmpresaController extends Controller
{
    public function index()
    {
        $items = Empresa::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nif' => 'string',
            'nom' => 'string',
            'persona_contacte' => 'string',
            'primer_telefon_contacte' => 'string',
            'segon_telefon_contacte' => 'string',
            'adreca' => 'string',
            'codi_postal' => 'string',
            'municipi' => 'string',
            'provincia' => 'string',
            'validada' => 'string',
            'usuari_id' => 'integer',
        ]);

        try {
            $item = Empresa::create($validatedData);
            $ofertes = Oferta::all();
            return view('web.sections.inici', [
                'alert' => ['type' => 'success', 'message' => 'Empresa creada correctamente, esperando confirmación del Administrador.'],
                'ofertes' => $ofertes
            ]);
        } catch (\Exception $e) {

            return view('web.sections.alta_empresa', [
                'alert' => ['type' => 'danger', 'message' => 'Error en crear la empresa, verifica que les dades introduïdes siguin correctes.'],
            ]);
        }
    }

    public function show($empresa_id)
    {
        $item = Empresa::findOrFail($empresa_id);
        return response()->json($item);
    }

    public function update(Request $request, $empresa_id)
    {
    
        $item = Empresa::findOrFail($empresa_id);
        $validatedData = $request->validate([
            'nif' => 'required|string',
            'nom' => 'nullable|string',
            'persona_contacte' => 'nullable|string',
            'primer_telefon_contacte' => 'nullable|string',
            'segon_telefon_contacte' => 'nullable|string',
            'adreca' => 'nullable|string',
            'codi_postal' => 'nullable|string',
            'municipi' => 'nullable|string',
            'provincia' => 'nullable|string',
            'validada' => 'required|boolean',
            'usuari_id' => 'nullable|integer',
        ]);

        $item->update($validatedData);
        return response()->json($item);
    }
    
    public function destroy($empresa_id)
    {
        $item = Empresa::findOrFail($empresa_id);
        $item->delete();
        return response()->json(null, 204);
    }
}
