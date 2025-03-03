<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            'services' => Service::all(),
            'portfolios' => Portfolio::all(),
            'testimonials' => Testimonial::all(),
        ]);
    }
}
