<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');

Route::get('/products', [ProdutoController::class, 'index']);
Route::post('/products', [ProdutoController::class, 'store']);
Route::get('/products/{id}/edit', [ProdutoController::class, 'edit'])->where('id', '[0-9]+');
Route::put('/products/{id}', [ProdutoController::class, 'update'])->where('id', '[0-9]+');
Route::patch('/products/{id}', [ProdutoController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/products/{id}', [ProdutoController::class, 'destroy'])->where('id', '[0-9]+');

});
