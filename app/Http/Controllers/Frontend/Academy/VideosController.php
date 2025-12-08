<?php

namespace App\Http\Controllers\Frontend\Academy;

use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    public function index() {
        return view('frontend.academy.videos.index');
    }


}
