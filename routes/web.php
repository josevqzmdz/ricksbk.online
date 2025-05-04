<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// this simple routing points the controllers within all/html/controller/controllers.php
// to their views inside resources/views
// change or adapt as needed

Route::get('/', [Controller::class, 'showIndex'])->name('index');

Route::get('/sobre_mi', [Controller::class, 'showSobreMi'])->name('sobre-mi');

Route::get('/index', [Controller::class, 'showIndex'])->name('index');

ROute::get('/Estudios', [Controller::class, 'showEstudios'])->name('Estudios');


