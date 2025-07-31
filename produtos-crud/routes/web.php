<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('index');
});

// Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/criar-produto', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/cadastrar-produto', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/editar-produto/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/atualizar-produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');


// Categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/criar-categoria', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/cadastrar-categoria', [CategoriaController::class, 'store'])->name('categoria.store');