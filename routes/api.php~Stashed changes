<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Tablas\Usuarios\UsuariosController;
use App\Tablas\Productos\ProductosController;



Route::prefix('usuario')->group(function () {
    Route::get('/',[ UsuariosController::class, 'getAll']);
    Route::post('/',[ UsuariosController::class, 'create']);
    Route::delete('/{ced}',[ UsuariosController::class, 'delete']);
    Route::get('/{ced}',[ UsuariosController::class, 'get']);
});
Route::prefix('productos')->group(function () {
    Route::get('/',[ ProductosController::class, 'getAll']);
});
Route::prefix('imagenes')->group(function () {
    Route::get('/{img}',[ ProductosController::class, 'imagen']);
});
