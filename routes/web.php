<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/sobre-mi', [HomeController::class, 'sobre_mi'])->name('sobre_mi');

