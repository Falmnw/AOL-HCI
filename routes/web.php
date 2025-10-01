<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/catalogue', [ProductController::class, 'index'])->name('catalogue');

Route::get('/product/add', [ProductController::class, 'add'])->name('addproduct');
Route::post('/product/add', [ProductController::class, 'create'])->name('create-product');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('edit-product');
Route::patch('/product/edit/{id}', [ProductController::class, 'update'])->name('update-product');

Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('delete-product');


