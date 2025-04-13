<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController 
{
        //this charges the view inside resources/views
        public function index(): View{
            return view('index');
        }       
        
        public function sobre_mi(): View{
            return view('sobre-mi');
        }
}
