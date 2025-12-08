<?php

namespace App\Http\Controllers\Frontend\Academy;

use App\Http\Controllers\Controller;

class EntrevistasController extends Controller
{
    public function index() {
        return view('frontend.academy.entrevistas.index');
    }


}
