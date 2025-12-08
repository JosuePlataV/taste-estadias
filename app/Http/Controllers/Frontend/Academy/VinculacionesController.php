<?php

namespace App\Http\Controllers\Frontend\Academy;

use App\Http\Controllers\Controller;

class VinculacionesController extends Controller
{
    public function index() {
        return view('frontend.academy.vinculaciones.index');
    }


}
