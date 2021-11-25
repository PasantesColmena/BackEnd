<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Tablas\Facturas\FacturasController;
use App\Tablas\Usuarios\UsuariosController;
use App\Tablas\Productos\ProductosController;
use App\Tablas\Categorias\CategoriasController;
use App\Tablas\Desglose\DesgloseController;

Route::prefix('usuario')->group(function () {
    Route::get('/',[ UsuariosController::class, 'getAll']);
    Route::post('/',[ UsuariosController::class, 'create']);
    Route::get('/ultimo',[ UsuariosController::class, 'getLastId']);
});
Route::prefix('productos')->group(function () {
    Route::get('/',[ ProductosController::class, 'getAll']);
    Route::get('/{id}',[ ProductosController::class, 'getAllCat']);


});
Route::prefix('categorias')->group(function () {
    Route::get('/',[ CategoriasController::class, 'getCategorias']);
    Route::get('/{id}',[ CategoriasController::class, 'getCategorias']);
});
Route::prefix('facturas')->group(function () {
    Route::get('/ultima',[ FacturasController::class, 'getLast']);
    Route::post('/create/factura',[ FacturasController::class, 'create']);;
    Route::post('/create/desgloses',[ DesgloseController::class, 'create']);;
});
Route::prefix('imagenes')->group(function () {
    Route::get('/{img}',[ ProductosController::class, 'imagen']);
});
