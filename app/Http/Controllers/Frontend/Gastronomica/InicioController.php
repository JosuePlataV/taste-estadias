<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index() {
        return view('frontend.gastronomica.inicio.index');
    }

}
