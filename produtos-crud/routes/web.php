<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('index');
});

// Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::post('/criar-produto', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/cadastrar-produto', [ProdutoController::class, 'store'])->name('produto.store');


// Categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::post('/criar-categoria', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/cadastrar-categoria', [CategoriaController::class, 'store'])->name('categoria.store');