<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class ComidaController extends Controller
{
    public function mostrar($tipo)
    {
        // Deben coincidir con los nombres de las carpetas
        $tiposDisponibles = [
            'alta',
            'fusion',
            'tradicional',
            'vegana',
        ];

        if (in_array($tipo, $tiposDisponibles)) {
            // Ej: frontend/gastronomica/comida/alta/alta.blade.php
            return view("frontend.gastronomica.comida.$tipo.$tipo");
        }

        abort(404);
    }
}
