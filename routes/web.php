<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ReconstructoraController;
use App\Http\Controllers\AutomovilController;
use App\Http\Controllers\CamionesController;
use App\Http\Controllers\BalatasController;
use App\Http\Controllers\AceitesController;
use App\Http\Controllers\KitsController;

/*vistas admin*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/', function () {
    return view('layouts.dashboard');
})->middleware(['auth'])->name('layouts.dashboard');*/

Route::get('/adminicio', [InicioController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('inicio');


Route::get('/admtallermecanic', [TallerController::class, 'ind'])
    ->middleware(['auth', 'verified'])
    ->name('tallermecanic');

Route::get('/admreparaciones', [ReconstructoraController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('reparaciones');

Route::get('/admrefaccionaria', function () {
        return view('paginas/admrefaccionaria');
    })->middleware(['auth', 'verified'])->name('refaccionaria');

Route::get('/admautomovil', [AutomovilController::class, 'ind'])
    ->middleware(['auth', 'verified'])
    ->name('automovill');


    Route::get('/admbalatas', [BalatasController::class, 'ind'])
    ->middleware(['auth', 'verified'])
    ->name('balatass');


Route::get('/admcamiones', [CamionesController::class, 'ind'])
    ->middleware(['auth', 'verified'])
    ->name('camioness');

    Route::get('/admaceites', [AceitesController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('aceitess');


    Route::get('/admkits', [KitsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('kitss');


Route::get('/admbalatas_nuevas', function () {
    return view('paginas/admbalatas_nuevas');
})->middleware(['auth', 'verified'])->name('balatas_nuevass');

Route::get('/admbalatas_reconstruidas', function () {
    return view('paginas/admbalatas_reconstruidas');
})->middleware(['auth', 'verified'])->name('balatas_reconstruidass');



Route::get('/admvarios', function () {
    return view('paginas/admvarios');
})->middleware(['auth', 'verified'])->name('varioss');



/*vistas clientes*/

Route::get('/', [InicioController::class, 'ind'])

    ->name('inicion');

Route::get('/taller', [TallerController::class, 'index'])->name('taller');

Route::get('/automovil', [AutomovilController::class, 'index'])->name('vistas.automovil');

Route::get('/camiones', [CamionesController::class, 'index'])->name('vistas.camiones');

Route::get('/balatas', [BalatasController::class, 'index'])->name('vistas.balatas');

Route::get('/aceites', [AceitesController::class, 'ind'])->name('vistas.aceites');

Route::get('/kits', [KitsController::class, 'ind'])->name('vistas.kits');





Route::get('/personla', function () {
    return view('vistas.personal');
})->name('personla');

Route::get('/ubicacion', function () {
    return view('vistas.ubicacion');
})->name('ubicacionn');


Route::get('/refaccionaria', function () {
    return view('vistas.refaccionaria');
})->name('refaccionariaa');



Route::get('/balatas-nuevas', function () {
    return view('vistas.balatas_nuevas');
})->name('vistas.balatas_nuevas');

Route::get('/balatas-reconstruidas', function () {
    return view('vistas.balatas_reconstruidas');
})->name('vistas.balatas_reconstruidas');


Route::get('/varios', function () {
    return view('vistas.varios');
})->name('vistas.varios');

Route::get('/reconstructora', function () {
    return view('vistas.reconstructora');
})->name('reconstructora');






/*rutas taller admin muestra la parte administrativa*/

Route::post('/taller/store', [TallerController::class, 'store'])->name('taller.store')->middleware('auth');
Route::get('/taller/create', [TallerController::class, 'create'])->name('taller.create')->middleware('auth');
Route::get('/taller/edit/{id}', [TallerController::class, 'edit'])->name('taller.edit')->middleware('auth');
Route::put('/taller/update/{id}', [TallerController::class, 'update'])->name('taller.update')->middleware('auth');
Route::delete('/taller/delete/{id}', [TallerController::class, 'destroy'])->name('taller.delete')->middleware('auth');

/*rutas automovil admin muestra la parte administrativa*/

Route::post('/automovil/store', [AutomovilController::class, 'store'])->name('automovil.store')->middleware('auth');
Route::get('/automovil/create', [AutomovilController::class, 'create'])->name('automovil.create')->middleware('auth');
Route::get('/automovil/edit/{id}', [AutomovilController::class, 'edit'])->name('automovil.edit')->middleware('auth');
Route::put('/automovil/update/{id}', [AutomovilController::class, 'update'])->name('automovil.update')->middleware('auth');
Route::delete('/automovil/delete/{id}', [AutomovilController::class, 'destroy'])
    ->name('automovil.delete')->middleware('auth');

/*rutas camiones admin muestra la parte administrativa*/

Route::post('/camiones/store', [CamionesController::class, 'store'])->name('camiones.store')->middleware('auth');
Route::get('/camiones/create', [CamionesController::class, 'create'])->name('camiones.create')->middleware('auth');
Route::get('/camiones/edit/{id}', [CamionesController::class, 'edit'])->name('camiones.edit')->middleware('auth');
Route::put('/camiones/update/{id}', [CamionesController::class, 'update'])->name('camiones.update')->middleware('auth');
Route::delete('/camiones/delete/{id}', [CamionesController::class, 'destroy'])
    ->name('camiones.delete')->middleware('auth');


/*rutas balatas admin muestra la parte administrativa*/

Route::post('/balatas/store', [BalatasController::class, 'store'])->name('balatas.store')->middleware('auth');
Route::get('/balatas/create', [BalatasController::class, 'create'])->name('balatas.create')->middleware('auth');
Route::get('/balatas/edit/{id}', [BalatasController::class, 'edit'])->name('balatas.edit')->middleware('auth');
Route::put('/balatas/update/{id}', [BalatasController::class, 'update'])->name('balatas.update')->middleware('auth');
Route::delete('/balatas/delete/{id}', [BalatasController::class, 'destroy'])
    ->name('balatas.delete')->middleware('auth');

/*rutas inicio admin muestra la parte administrativa*/

// Imágenes del carrusel
Route::get('/adminicio', [InicioController::class, 'index'])->name('paginas.adminicio');
Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');
// Ruta que muestra el formulario para subir la imagen del carrusel
Route::get('/carousel/create', [InicioController::class, 'createCarouselImage'])->name('carousel.create');
// Ruta para almacenar la imagen del carrusel
Route::post('/carousel/store', [InicioController::class, 'storeCarouselImage'])->name('carousel.store');


Route::get('/history/create', [InicioController::class, 'createHistory'])->name('history.create');
Route::post('/history/store', [InicioController::class, 'storeHistory'])->name('history.store');
Route::get('/feature/create', [InicioController::class, 'createFeature'])->name('feature.create');
Route::post('/feature/store', [InicioController::class, 'storeFeature'])->name('feature.store');

Route::get('/history/edit', [InicioController::class, 'editHistory'])->name('history.edit');
Route::post('/history/update', [InicioController::class, 'updateHistory'])->name('history.update');
Route::delete('/history/destroy', [InicioController::class, 'destroyHistory'])->name('history.destroy');

Route::get('/features/{id}/edit', [InicioController::class, 'editFeature'])->name('features.edit');
Route::post('/features/{id}/update', [InicioController::class, 'updateFeature'])->name('features.update');
Route::delete('/features/{id}/destroy', [InicioController::class, 'destroyFeature'])->name('features.destroy');



/*rutas reconstructora admin muestra la parte administrativa*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admreparaciones', [ReconstructoraController::class, 'index'])->name('reparaciones');
    Route::get('/reconstructora/create', [ReconstructoraController::class, 'create'])->name('reconstructora.create');
    Route::post('/reconstructora/store', [ReconstructoraController::class, 'store'])->name('reconstructora.store');
});

/*rutas aceites admin muestra la parte administrativa*/

Route::get('/formularios/formulario6', [AceitesController::class, 'create'])->name('aceites.create');
Route::post('/aceites', [AceitesController::class, 'store'])->name('aceites.store');
Route::get('/aceites/{aceite}/edit', [AceitesController::class, 'edit'])->name('aceites.edit');
Route::put('/aceites/{aceite}', [AceitesController::class, 'update'])->name('aceites.update');
Route::delete('/aceites/{aceite}', [AceitesController::class, 'destroy'])->name('aceites.destroy');

/*rutas clutch admin muestra la parte administrativa*/
Route::get('/formularios/formulario7', [KitsController::class, 'create'])->name('kitss.create');
Route::post('/ki', [KitsController::class, 'store'])->name('kitss.store');
Route::get('/ki/{kit}/edit', [KitsController::class, 'edit'])->name('kitss.edit');
Route::put('/ki/{kit}', [KitsController::class, 'update'])->name('kitss.update');
Route::delete('/ki/{kit}', [KitsController::class, 'destroy'])->name('kitss.destroy');































Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
