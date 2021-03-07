<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
  Rutas correspondientes al controlador de productos
*/
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/{id}',[ProductosController::class, 'show']);
Route::post('/productos',[ProductosController::class, 'post']);
Route::put('/productos/{id}',[ProductosController::class, 'put']);
Route::delete('/productos/{id}',[ProductosController::class, 'delete']);

/*
  Rutas correspondientes al controlador de proveedores
*/
Route::get('/proveedores', [ProveedoresController::class, 'index']);
Route::get('/proveedores/{id}', [ProveedoresController::class, 'show']);
Route::post('/proveedores', [ProveedoresController::class, 'post']);
Route::put('/proveedores/{id}', [ProveedoresController::class, 'put']);
Route::delete('/proveedores/{id}', [ProveedoresController::class, 'delete']);