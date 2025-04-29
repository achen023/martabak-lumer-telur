<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\aboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'show']);

Route::get('/landing', [landingController::class, 'show']);

Route::get('/menu', [menuController::class, 'show']);

Route::get('/about', [aboutController::class, 'show']);