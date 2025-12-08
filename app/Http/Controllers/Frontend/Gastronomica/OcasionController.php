<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class OcasionController extends Controller
{
    public function mostrar($ocasion)
    {
        $vistasDisponibles = [
            'romantico',
            'familiar',
            'negocios',
            'street',
            'todos',
        ];

        if (in_array($ocasion, $vistasDisponibles)) {
            // Ej: frontend/gastronomica/ocasion/romantico/romantico.blade.php
            return view("frontend.gastronomica.ocasion.$ocasion.$ocasion");
        }

        abort(404);
    }
}
