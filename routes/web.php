<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\Oferta;
use App\Models\Alumne;

use App\Http\Controllers\UsuariController;
use App\Http\Controllers\AlumneController;
use App\Http\Controllers\AlumneEstudiController;
use App\Http\Controllers\AlumneOfertaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstudiController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertaEstudiController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web para tu aplicación. Estas rutas son
| cargadas por el RouteServiceProvider y asignadas al grupo de middleware
| "web". ¡Haz algo grandioso!
|
*/

// Ruta de búsqueda
Route::get('/search', [OfertaController::class, 'search'])->name('search');

// Ruta de inicio
Route::get('/', function () {
    $ofertes = Oferta::all();
    return view('web.sections.inici')->with('ofertes', $ofertes);
});

// Listado de ofertas
Route::get('/llistat-ofertes', function () {
    $ofertes = Oferta::all();
    return view('web.sections.ofertes')->with('ofertes', $ofertes);
});

// Alta de alumno
Route::get('/altaAlumne', function () {
    return view('web.sections.alta');
});

// Actualizar alumno
Route::get('/actualitzarAlumne', function () {
    return view('web.sections.actualizar_alumne');
});

// Alta de empresa
Route::get('/altaEmpresa', function () {
    return view('web.sections.alta_empresa');
});

// Login
Route::get('/login', function () {
    return view('web.sections.login');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('web.sections.login');
});

// Encriptar clave
Route::get('/encriptar/{clau}', function ($clau) {
    return $clau . " - " . bcrypt($clau);
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/panell-alumne', function () {
        $ofertes = Auth::user()->alumne->ofertes;
        $alert = session()->get('alert');
        $alumne = Auth::user()->alumne;
        $usuari = Auth::user();
        return view('web.sections.alumne')
            ->with('ofertes', $ofertes)
            ->with('alert', $alert)
            ->with('alumne', $alumne)
            ->with('usuari', $usuari);
    })->name('panell-alumne');

    Route::get('/editar-alumne/{id}', function ($id) {
        $alumne = Auth::user()->alumne;
        return view('web.sections.editar_alumne')->with('alumne', $alumne);
    });

    Route::post('/editar-alumne', [FrontController::class, 'modificarAlumne']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/panell-empresa', function () {
        $ofertes = Auth::user()->empresa->ofertes;
        $alert = session()->get('alert');
        $empresa = Auth::user()->empresa;
        $usuari = Auth::user();
        return view('web.sections.empresa')
            ->with('ofertes', $ofertes)
            ->with('alert', $alert)
            ->with('empresa', $empresa)
            ->with('usuari', $usuari);
    })->name('panell-empresa');

    Route::get('/editar-empresa/{id}', function ($id) {
        $empresa = Auth::user()->empresa;
        return view('web.sections.editar_empresa')->with('empresa', $empresa);
    });

    Route::post('/editar-empresa', [FrontController::class, 'modificarEmpresa'])->name('editar-empresa');

    Route::get('/alta-oferta', function () {
        $empresa = Auth::user()->empresa;
        return view('web.sections.alta_oferta')->with('empresa', $empresa);;
    })->name('ruta.alta_oferta');


    Route::get('/editar-oferta/{id}', function ($id) {
        $oferta = Oferta::findOrFail($id);
        return view('web.sections.editar_oferta')->with('oferta', $oferta);
    });

    Route::post('/editar-oferta', [FrontController::class, 'modificarOferta'])->name('editar-oferta');

    Route::get('/eliminar-oferta/{id}', function ($id) {
        $oferta = Oferta::findOrFail($id);
        $empresa = $oferta->empresa;
        $alert = array(
            "type" => "success",
            "message" => "Oferta eliminada correctament",
        );

        $oferta->delete();
        return view('web.sections.empresa')
        ->with('empresa', $empresa)
        ->with('usuari', Auth::user())
        ->with('ofertes', Auth::user()->empresa->ofertes)
        ->with('alert', $alert);
    });

});

Route::get('/oferta/{id}', [OfertaController::class, 'getOfertaDetails'])->name('oferta.details');

Route::middleware(['auth'])->group(function () {
    Route::post('/oferta/{id}/inscribirse', [OfertaController::class, 'inscribirse'])->name('oferta.inscribirse');
    Route::post('/oferta/{id_oferta}/{id_alumne}/desinscribirse', [OfertaController::class, 'desinscribirse'])->name('oferta.desinscribirse');
});

// Autenticación y recuperación de contraseña
Route::post('/auth', [UsuariController::class, 'authenticate']);
Route::post('/recovery-password', [UsuariController::class, 'recoverPassword']);

// Otras rutas públicas
Route::get('/baixa', function () {
    return view('web.sections.baixa');
});

Route::get('/oferta', function () {
    return view('web.sections.oferta');
});


Route::get('/default', function () {
    return view('welcome');
});

// Rutas de recursos
Route::resource('usuaris', UsuariController::class);
Route::resource('alumnes', AlumneController::class);
Route::resource('alumne_estudis', AlumneEstudiController::class);
Route::resource('alumne_ofertes', AlumneOfertaController::class);
Route::resource('empreses', EmpresaController::class);
Route::resource('estudis', EstudiController::class);
Route::resource('ofertes', OfertaController::class);
Route::resource('oferta_estudis', OfertaEstudiController::class);

// Ruta alta ofertes
Route::delete('alumne_ofertes/{id}', [AlumneOfertaController::class, 'destroy']);



Route::middleware(['auth'])->group(function () {
        Route::get('/editar-usuari/{id}', function ($id) {
        $usuari = Auth::user();
        return view('web.sections.editar_usuari')->with('usuari', $usuari);
    });

    Route::post('/editar-usuari', [FrontController::class, 'modificarUsuari']);
});

?>
