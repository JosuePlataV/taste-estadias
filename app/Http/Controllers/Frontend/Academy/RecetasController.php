<?php

namespace App\Http\Controllers\Frontend\Academy;

use App\Http\Controllers\Controller;

class RecetasController extends Controller
{
    public function index() {
        return view('frontend.academy.recetas.index');
    }


}
