<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'showIndex'])->name('index');

Route::get('/sobre_mi', [Controller::class, 'showSobreMi'])->name('sobre_mi');

Route::get('/index', [Controller::class, 'showIndex'])->name('index');


