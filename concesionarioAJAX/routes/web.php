<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\MarcaController;

    // Portada pública
    Route::get(uri: '/', action: [ModeloController::class, 'portada'])->name(name: 'portada');

    Route::prefix('api')->group(function () {
        // Modelos
        Route::get(uri: '/modelos', action: [ModeloController::class, 'list'])->name(name: 'api.modelos.list');

        Route::get(uri: '/marcas/{id}/modelos', action: [MarcaController::class, 'modelos'])->name(name: 'api.modelos.marcas');
    });