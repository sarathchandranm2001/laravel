<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::Class, 'homepage']);
Route::post('/register', [UserController::Class, 'register']);
