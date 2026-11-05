<?php

namespace App\Http\Controllers;

use App\Models\TuitionCourse;
use App\Support\SiteContent;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'content' => SiteContent::get('home'),
            'courses' => TuitionCourse::active()->orderBy('sort_order')->take(3)->get(),
        ]);
    }
}
