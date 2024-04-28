<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto_create');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produto_store');
Route::get('/', [ProdutoController::class, 'show'])->name('produto_show');
Route::get('/produto/edit/{id}', [ProdutoController::class, 'edit'])->name('produto_edit');
Route::post('/produto/update', [ProdutoController::class, 'update'])->name('produto_update');
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto_destroy');
