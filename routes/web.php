<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/home', [HomeController::class, 'show']);
Route::get('/landing', [LandingController::class, 'show'])->name('landing');
Route::get('/menu', [MenuController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/detail', [DetailController::class, 'show']);

Route::get('/contact', [ContactController::class, 'show']);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::middleware('auth.admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/product', [ProductController::class, 'show']);
    Route::get('/user', [UserController::class, 'show']);
});

Route::get('/admin', [AdminController::class, 'admin_login'])->name('admin');
Route::post('/admin-proses', [AdminController::class, 'admin_proses'])->name('admin-proses');
Route::post('/admin-logout', [AdminController::class, 'admin_logout'])->name('admin-logout');

