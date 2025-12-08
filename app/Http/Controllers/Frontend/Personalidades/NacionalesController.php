<?php

namespace App\Http\Controllers\Frontend\Personalidades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NacionalesController extends Controller
{
    public function index() {
        return view('frontend.personalidades.nacionales.index');
    }



}