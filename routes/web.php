<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/sobre-mi', [Homeontroller::class, 'sobre_mi'])->name('sobre-mi');

/*
Route::get('/', function (){
    return view('index');
});

Route::get('/sobre_mi', function (){
    return view('sobre-mi');
});
*/