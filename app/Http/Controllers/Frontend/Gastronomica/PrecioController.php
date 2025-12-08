<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class PrecioController extends Controller
{
    public function mostrar($rango)
    {
        $rangosDisponibles = [
            'economico',
            'moderado',
            'gourmet',
            'lujo',
        ];

        if (in_array($rango, $rangosDisponibles)) {
            // Ej: frontend/gastronomica/precio/economico/economico.blade.php
            return view("frontend.gastronomica.precio.$rango.$rango");
        }

        abort(404);
    }
}
