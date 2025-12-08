<?php

namespace App\Http\Controllers\Frontend\Personalidades;

use App\Http\Controllers\Controller;

class InternacionalesController extends Controller
{
    public function index()
    {
        return view('frontend.personalidades.internacionales.index');
    }


}
