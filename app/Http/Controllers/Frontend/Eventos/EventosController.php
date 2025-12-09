<?php

namespace App\Http\Controllers\Frontend\Eventos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventosController extends Controller
{
public function index()
{
    return view('frontend.eventos.eventos.eventos');
}

public function plantilla()
{
    return view('frontend.eventos.plantillas.plantilla');
}
}