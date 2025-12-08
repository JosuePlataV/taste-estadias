<?php

namespace App\Http\Controllers\Frontend\Gastronomica;

use App\Http\Controllers\Controller;

class UbicacionController extends Controller
{
    public function index()
    {
        return view('frontend.gastronomica.ubicacion.index');
    }

    //  principal
    public function mostrar($ubicacion)
    {
        $vistasDisponibles = [
            'cdmx',
            'guadalajara',
            'monterrey',
            'michoacan',
            'oaxaca',
            'puebla',
            'rivieraMaya',
            'valledeguadalupe',
            'veracruz',
            'yucatan',
        ];

        if (in_array($ubicacion, $vistasDisponibles)) {
            return view("frontend.gastronomica.ubicacion.$ubicacion.$ubicacion");
        }

        abort(404);
    }

    // Subvistas 
    public function mostrarSubpagina($ubicacion, $pagina)
    {
        $vistasDisponibles = [
            'cdmx',
            'guadalajara',
            'monterrey',
            'michoacan',
            'oaxaca',
            'puebla',
            'rivieraMaya',
            'valledeguadalupe',
            'veracruz',
            'yucatan',
        ];

        if (in_array($ubicacion, $vistasDisponibles)) {
            $rutaVista = "frontend.gastronomica.ubicacion.$ubicacion.$pagina";

            if (view()->exists($rutaVista)) {
                return view($rutaVista);
            }
        }

        abort(404);
    }
}
