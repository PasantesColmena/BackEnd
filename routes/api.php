<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsuariosController;

Route::prefix('usuario')->group(function () {
    Route::get('/',[ UsuariosController::class, 'getAll']);
    Route::post('/',[ UsuariosController::class, 'create']);
    Route::delete('/{ced}',[ UsuariosController::class, 'delete']);
    Route::get('/{ced}',[ UsuariosController::class, 'get']);
});
