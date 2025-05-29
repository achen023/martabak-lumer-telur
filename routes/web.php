<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminController;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/home', [HomeController::class, 'show']);
Route::get('/landing', [LandingController::class, 'show']);
Route::get('/menu', [MenuController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/detail', [DetailController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/product', [ProductController::class, 'show']);
Route::get('/user', [UserController::class, 'show']);
Route::get('/contact', [ContactController::class, 'show']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/admin', [AdminController::class, 'showAdminForm'])->name('admin');
Route::post('/admin', [AdminController::class, 'admin']);

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::put('/produk/update', [ProdukController::class, 'update'])->name('produk.update');

Route::delete('/produk/hapus', [ProdukController::class, 'destroy'])->name('produk.hapus');
