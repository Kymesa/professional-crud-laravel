<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('Home');
    }

    public function about(): View
    {
        return view('About');
    }

    public function price(): View
    {
        return view('Price');
    }
}
