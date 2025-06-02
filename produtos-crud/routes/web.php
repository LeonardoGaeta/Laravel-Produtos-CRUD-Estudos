<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/criar-produto', [ProdutoController::class, 'create'])->name('produto.create');