<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuari;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsuariController extends Controller
{
    // Mostrar una llista d'usuaris
    public function index()
    {
        $usuaris = Usuari::all();
        return response()->json($usuaris);
    }

    // Emmagatzemar un nou usuari
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|unique:Usuaris' . $usuari_id,
            'password' => 'required|string',
            'remember_token' => 'nullable|string',
            'rol' => 'required|in:Alumnes,Empreses,Administradors',
        ]);

        $usuari = Usuari::create($validatedData);
        return response()->json($usuari, 201);
    }

    // Mostrar les dades d'un usuari específic
    public function show($usuari_id)
    {
        $usuari = Usuari::findOrFail($usuari_id);
        return response()->json($usuari);
    }

    // Actualitzar les dades d'un usuari
    public function update(Request $request, $usuari_id)
    {
        $usuari = Usuari::findOrFail($usuari_id);

        $validatedData = $request->validate([
            'email' => 'required|string|email|unique:Usuaris,email,' . $usuari_id,
            'password' => 'required|string',
            'remember_token' => 'nullable|string',
            'rol' => 'required|in:Alumnes,Empreses,Administradors',
        ]);

        $usuari->update($validatedData);
        return response()->json($usuari);
    }

    // Eliminar un usuari
    public function destroy($usuari_id)
    {
        $usuari = Usuari::findOrFail($usuari_id);
        $usuari->delete();
        return response()->json(null, 204);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if(Auth::user()->rol == "Alumnes") {
                $alert = array(
                    "type" => "success",
                    "message" => "¡Has iniciat sessió amb exit!",
                );
                return redirect()->intended('panell-alumne')->with('alert', $alert);
            } else if(Auth::user()->rol == "Empreses") {
                if(Auth::user()->empresa->validada){
                    $alert = array(
                    "type" => "success",
                    "message" => "¡Has iniciat sessió amb exit!",
                    );
                    return redirect()->intended('panell-empresa')->with('alert', $alert);
                }
                return view('web.sections.login', ['alert' => ['type' => 'danger', 'message' => 'La empresa no esta validada, contacta amb un administrador.']]);
            } else if(Auth::user()->rol == "Administradors") {
                return view('web.sections.login', ['alert' => ['type' => 'success', 'message' => 'Administrador.']]);
            }
        }else{
            return view('web.sections.login', ['alert' => ['type' => 'danger', 'message' => 'Credencials incorrectes. Si us plau, torna-ho a intentar.']]);
        }
    }

    public function recoverPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:Usuaris,email',
        ]);

        $user = Usuari::where('email', $request->email)->firstOrFail();
        $newPassword = Str::random(10); 
        $user->password = Hash::make($newPassword);
        $user->save();

        Mail::send('components.login.recovery-succes', ['user' => $user, 'newPassword' => $newPassword], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Recuperació de contrasenya');
        });

        return back()->with('success', 'Una nova contrasenya ha sigut enviada al seu correu electrònic.');
    }
}
