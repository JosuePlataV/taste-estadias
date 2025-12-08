<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class PlantillasController extends Controller
{
    public function mostrar($nombre)
    {
        
        $vistasDisponibles = [
            'pangea',
            
        ];

        if (in_array($nombre, $vistasDisponibles)) {

            return view("frontend.gastronomica.plantillas.cdmx.$nombre");
        }

        abort(404, "Vista no encontrada: $nombre");
    }
}
