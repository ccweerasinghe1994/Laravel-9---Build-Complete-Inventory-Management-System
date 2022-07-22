<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    function Index()
    {
        return view('about');
    }

    function Contact()
    {
        return view('contact');
    }
}
