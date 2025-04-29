<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\menuController;
<<<<<<< HEAD
use App\Http\Controllers\aboutController;
=======
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
>>>>>>> 4aa8d983ad18e5b1cd43500582f707cb7abaa285

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'show']);

Route::get('/landing', [landingController::class, 'show']);

Route::get('/menu', [menuController::class, 'show']);

<<<<<<< HEAD
Route::get('/about', [aboutController::class, 'show']);
=======
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
>>>>>>> 4aa8d983ad18e5b1cd43500582f707cb7abaa285
