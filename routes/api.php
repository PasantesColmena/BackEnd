<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\JwtAuthController;
use App\Tablas\Desglose\DesgloseController;
use App\Tablas\Facturas\FacturasController;
use App\Tablas\Usuarios\UsuariosController;
use App\Tablas\Productos\ProductosController;
use App\Tablas\Categorias\CategoriasController;
use App\Tablas\Productos\Productos;

Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuariosController::class, 'getAll']);
    Route::post('/create', [UsuariosController::class, 'create']);
    Route::get('/ultimo', [UsuariosController::class, 'getLastId']);
    Route::get('/clientes', [UsuariosController::class, 'getClientes']);
    Route::delete('/delete/{id}', [UsuariosController::class, 'delete']);
    Route::get('/mail', [UsuariosController::class, 'correo']);
});
Route::prefix('productos')->group(function () {
    Route::get('/', [ProductosController::class, 'getAll']);
    Route::get('/{id}', [ProductosController::class, 'getAllCat']);
    Route::delete('/delete/{id}', [ProductosController::class, 'delete']);
});
Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriasController::class, 'getCategorias']);
    Route::get('/{id}', [CategoriasController::class, 'getCategorias']);
});
Route::prefix('facturas')->group(function () {
    Route::get('/ultima/{id}', [FacturasController::class, 'getLast']);
    Route::post('/delete/{id}', [FacturasController::class, 'delete']);
    Route::get('/getAll', [FacturasController::class, 'getAll']);
    Route::post('/create/factura', [FacturasController::class, 'create']);;
    Route::post('/create/desgloses', [DesgloseController::class, 'create']);;
    Route::get('/pdf', [PDFController::class, 'PDF']);
});
Route::prefix('imagenes')->group(function () {
    Route::get('/{img}', [ProductosController::class, 'imagen']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/signin', [JwtAuthController::class, 'login']);
    Route::get('/user', [JwtAuthController::class, 'user']);
    Route::post('/token-refresh', [JwtAuthController::class, 'refresh']);
    Route::post('/signout', [JwtAuthController::class, 'signout']);

    Route::post('/req-password-reset', [ResetPwdReqController::class, 'reqForgotPassword']);
    Route::post('/update-password', [UpdatePwdController::class, 'updatePassword']);
});
