<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  // Pastikan nama controller sesuai
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


// Menghapus route pertama yang menuju 'welcome'
Route::get('/', [HomeController::class, 'index'])->name('home');  // Menjadikan HomeController sebagai halaman utama

Route::get('/home', [HomeController::class, 'show']);  // Jika Anda masih membutuhkan route ini

Route::get('/landing', [LandingController::class, 'show']);

Route::get('/menu', [MenuController::class, 'show']);

Route::get('/produk', [ProductController::class, 'index'])->name('product.index');

Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');

