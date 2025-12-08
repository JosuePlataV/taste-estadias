<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Academy\BolsaController;
use App\Http\Controllers\Frontend\Academy\VideosController;
use App\Http\Controllers\Frontend\Academy\VinculacionesController;
use App\Http\Controllers\Frontend\Academy\RecetasController;
use App\Http\Controllers\Frontend\Academy\EntrevistasController;
use App\Http\Controllers\Frontend\Personalidades\NacionalesController;
use App\Http\Controllers\Frontend\Personalidades\InternacionalesController;
use App\Http\Controllers\Frontend\Gastronomica\InicioController;
use App\Http\Controllers\Frontend\Gastronomica\UbicacionController;
use App\Http\Controllers\Frontend\Gastronomica\PlantillasController;
use App\Http\Controllers\Frontend\Gastronomica\OcasionController;
use App\Http\Controllers\Frontend\Gastronomica\ComidaController;
use App\Http\Controllers\Frontend\Gastronomica\PrecioController;
use App\Http\Controllers\Frontend\Eventos\EventosController;



// Página principal
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

// Página "Quiénes Somos"
Route::get('/quienes', function () {
    return view('frontend.quienes');
})->name('quienes');

// Página Blog
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

// Página Eventos

Route::prefix('eventos')->name('eventos.')->group(function () {
    // /eventos  -> eventos.blade.php
    Route::get('/', [EventosController::class, 'index'])->name('index');

    // /eventos/plantilla  -> plantilla.blade.php
    Route::get('/plantilla', [EventosController::class, 'plantilla'])->name('plantilla');
});

// Página contacto
Route::get('/contacto', function () {
    return view('frontend.contacto');
})->name('contacto');

// Página calendario
Route::get('/calendario', function () {
    return view('frontend.calendario');
})->name('calendario');

Route::prefix('academy')->group(function () {

    // Redirigir automáticamente a Bolsa de trabajo por defecto
    Route::redirect('/', '/academy/bolsa')->name('academy.index');


Route::prefix('bolsa')->group(function () {
    Route::get('/', [BolsaController::class, 'index'])->name('academy.bolsa');

});

    Route::prefix('videos')->group(function () {
        Route::get('/', [VideosController::class, 'index'])->name('academy.videos');
    });

    
    Route::prefix('vinculaciones')->group(function () {
        Route::get('/', [VinculacionesController::class, 'index'])->name('academy.vinculaciones');

    });

    Route::prefix('recetas')->group(function () {
        Route::get('/', [RecetasController::class, 'index'])->name('academy.recetas');

    });

    Route::prefix('entrevistas')->group(function () {
        Route::get('/', [EntrevistasController::class, 'index'])->name('academy.entrevistas');

    });

    
});


// PERSONALIDADES
Route::prefix('personalidades')->group(function () {

    // Redirigir automáticamente a nacionales
    Route::redirect('/', '/personalidades/nacionales')->name('personalidades.index');

    // NACIONALES
    Route::prefix('nacionales')->group(function () {
        Route::get('/', [NacionalesController::class, 'index'])->name('personalidades.nacionales');

    });

    // INTERNACIONALES
    Route::prefix('internacionales')->group(function () {
        Route::get('/', [InternacionalesController::class, 'index'])->name('personalidades.internacionales');
    });
});
// GASTRONOMICA
Route::prefix('gastronomica')->group(function () {

    // Redirigir automáticamente 
    Route::redirect('/', '/gastronomica/inicio')->name('gastronomica.index');

    // inicio
    Route::get('/inicio', [InicioController::class, 'index'])->name('gastronomica.inicio');

    // OCASIÓN (romantico, familiar, negocios, street, todos)
    Route::get('/ocasion/{ocasion}', [OcasionController::class, 'mostrar'])
        ->name('gastronomica.ocasion.mostrar');

    // COMIDA (alta, fusion, tradicional, vegana)
    Route::get('/comida/{tipo}', [ComidaController::class, 'mostrar'])
        ->name('gastronomica.comida.mostrar');

    // PRECIO (economico, moderado, gourmert, lujo)
    Route::get('/precio/{rango}', [PrecioController::class, 'mostrar'])
        ->name('gastronomica.precio.mostrar');
});

// UBICACIÓN 
Route::prefix('ubicacion')->group(function () {
    Route::get('/', [UbicacionController::class, 'index'])->name('ubicacion.index');

    Route::get('/{ubicacion}', [UbicacionController::class, 'mostrar'])
        ->name('ubicacion.mostrar');

    Route::get('/{ubicacion}/{pagina}', [UbicacionController::class, 'mostrarSubpagina'])
        ->name('ubicacion.subpagina');
});

Route::prefix('plantillas')->group(function () {
    Route::get('/cdmx/{nombre}', [PlantillasController::class, 'mostrar'])
        ->name('plantillas.cdmx.mostrar');
});
