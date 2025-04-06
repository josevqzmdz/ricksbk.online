<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

use App\Models\index;
use App\Models\sobre_mi;

class MainController extends Controller
{
    //this charges the view inside resources/views
    public function index(): View{
        return view('index');
    }
    
    public function sobre_mi(): View{
        return view('sobre-mi');
    }
}
