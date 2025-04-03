<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
Route::get('/', function () {
    return view('index');
});

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
});
*/
Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/index', [Controller::class, 'index'])->name('index');
Route::get('/sobre-mi', [Controller::class, 'index'])->name('index');

