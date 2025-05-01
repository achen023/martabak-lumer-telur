<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/home', [homeController::class, 'show']);
Route::get('/landing', [landingController::class, 'show']);
Route::get('/menu', [menuController::class, 'show']);
Route::get('/about', [aboutController::class, 'show']);
Route::get('/detail', [detailController::class, 'show']);
Route::get('/dashboard', [dashboardController::class, 'show']);
Route::get('/product', [productController::class, 'show']);
Route::get('/user', [userController::class, 'show']);
Route::get('/contact', [contactController::class, 'show']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
