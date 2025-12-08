<?php

namespace App\Http\Controllers\Frontend\Academy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BolsaController extends Controller
{
    public function index() {
        return view('frontend.academy.bolsa.index');
    }


}
