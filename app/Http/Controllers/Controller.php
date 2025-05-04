<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;

// this simple controller points to the views within the project
// add more as needed following either the logic here or the docs

class Controller extends BaseController
{
    public function showIndex(): View {
        return view('index');
    }

    public function showSobreMi(): View {
        return view('sobre-mi');
    }

    public function showEstudios(): View {
        return view('Estudios');
    }
}
