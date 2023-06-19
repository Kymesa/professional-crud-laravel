<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function price(): View
    {
        return view('price');
    }
}
