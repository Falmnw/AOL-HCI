<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/catalogue', [ProductController::class, 'index'])->name('catalogue')->middleware('simple.auth');

Route::get('/product/add', [ProductController::class, 'add'])->name('addproduct')->middleware('simple.auth');
Route::post('/product/add', [ProductController::class, 'create'])->name('create-product')->middleware('simple.auth');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('edit-product')->middleware('simple.auth');
Route::patch('/product/edit/{id}', [ProductController::class, 'update'])->name('update-product')->middleware('simple.auth');

Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('delete-product')->middleware('simple.auth');
