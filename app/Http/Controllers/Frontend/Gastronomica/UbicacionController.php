<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class UbicacionController extends Controller
{
    public function mostrarCdmx()
    {
        return view('frontend.gastronomica.ubicacion.cdmx.cdmx');
    }
}