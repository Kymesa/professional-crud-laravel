<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function handleLogin(LoginPostRequest $request)
    {
        dd($request->all());
    }
}
