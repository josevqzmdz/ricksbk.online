<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function showIndex(): View {
        return view('index');
    }

    public function showSobreMi(): View {
        return view('sobre-mi');
    }
}
