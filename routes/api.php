<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorProduto;
use App\Http\Controllers\controladorCategoria;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/produto', [controladorProduto::class, 'createProduct']);
Route::get('/produto', [controladorProduto::class, 'getAllProducts']);
Route::patch('/produto/{id}', [controladorProduto::class, 'updateProduct']);
Route::delete('/produto/{id}', [controladorProduto::class, 'deleteProduct']);





Route::post('/categoria', [controladorCategoria::class, 'createCategoria']);
Route::get('/categoria', [controladorCategoria::class, 'getAllCategorias']);
Route::patch('/categorias/{id}', [controladorCategoria::class, 'updateCategoria']);
Route::delete('/categorias/{id}', [controladorCategoria::class, 'deleteCategoria']);
