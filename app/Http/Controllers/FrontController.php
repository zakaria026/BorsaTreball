<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Alumne;
use App\Models\Empresa;
use App\Models\Oferta;
use App\Models\Usuari;


class FrontController extends Controller
{
    
    public function modificarAlumne(Request $request){


            
        // Crida al Segon Controlador
        $response = Http::put('http://p4.cfinformatica.org/alumnes/'.$request->alumne_id, [
            'nom' => $request->nom,
            'primer_cognom' => $request->primer_cognom,
            'segon_cognom' => $request->segon_cognom,
            'dni' => $request->dni,
            'adreca' => $request->adreca,
            'codi_postal' => $request->codi_postal,
            'municipi' => $request->municipi,
            'provincia' => $request->provincia,
            'data_naixement' => $request->data_naixement,
            'primer_telefon' => $request->primer_telefon,
            'segon_telefon' => $request->segon_telefon,
            'carnet_conduir' => $request->carnet_conduir,
            'idioma1' => $request->idioma1,
            'idioma2' => $request->idioma2,
            'idioma3' => $request->idioma3,
            'idioma4' => $request->idioma4,
            'observacions' => $request->observacions,
            'usuari_id' => $request->usuari_id
        ]);

        $alumne = Alumne::findOrFail($request->alumne_id);
        return redirect()->intended('panell-alumne')
        ->with('alert', ['type' => 'success', 'message' => 'Alumne actualitzat correctament.'])
        ->with('alumne', $alumne);
    }



    public function modificarEmpresa(Request $request){
            
        // Crida al Segon Controlador
        $response = Http::put('http://p4.cfinformatica.org/empreses/'.$request->empresa_id, [
            'nif' => $request->nif,
            'nom' => $request->nom,
            'persona_contacte' => $request->persona_contacte,
            'primer_telefon_contacte' => $request->primer_telefon_contacte,
            'segon_telefon_contacte' => $request->segon_telefon_contacte,
            'adreca' => $request->adreca,
            'codi_postal' => $request->codi_postal,
            'municipi' => $request->municipi,
            'provincia' => $request->provincia,
            'validada' => $request->validada,
            'usuari_id' => $request->usuari_id
        ]);

        $empresa = Empresa::findOrFail($request->empresa_id);
        return redirect()->intended('panell-empresa')
        ->with('alert', ['type' => 'success', 'message' => 'Empresa actualitzada correctament.'])
        ->with('empresa', $empresa);
    }

    public function modificarOferta(Request $request){
           
        $response = Http::put('http://p4.cfinformatica.org/ofertes/' .$request->oferta_id, [
            'horari' => $request->horari,
            'incorporacio' => $request->incorporacio,
            'sou' => $request->sou,
            'edat' => $request->edat,
            'idioma1' => $request->idioma1,
            'idioma2' => $request->idioma2,
            'idioma3' => $request->idioma3,
            'idioma4' => $request->idioma4,
            'tipus_contracte' => $request->tipus_contracte,
            'caducitat_oferta' => $request->caducitat_oferta,
            'descripció' => $request->descripcio,
            'empresa_id' => $request->empresa_id
        ]);


        return redirect()->intended('oferta/' .$request->oferta_id)
        ->with('alert', ['type' => 'success', 'message' => 'Oferta editada correctament.']);    
    }


    public function modificarUsuari(Request $request){
        $contasenyaEncriptada = bcrypt($request->password);

            
        // Crida al Segon Controlador
        $response = Http::put('http://p4.cfinformatica.org/usuaris/' .$request->id, [
            'email' => $request->email,
            'password' => $contasenyaEncriptada,
            'rol' => $request->rol,
            'remember_token' => $request->remember_token
        ]);


        $usuari = Usuari::findOrFail($request->id);

        if($usuari->rol == "Alumnes") {
            return redirect()->intended('panell-alumne')
            ->with('alert', ['type' => 'success', 'message' => 'Usuari actualitzat correctament.'])
            ->with('alumne', $usuari->alumne);
        }

        if($usuari->rol == "Empreses") {
            return redirect()->intended('panell-empresa')
            ->with('alert', ['type' => 'success', 'message' => 'Usuari actualitzat correctament.'])
            ->with('empresa', $usuari->empresa);
        }
    }
   

}
