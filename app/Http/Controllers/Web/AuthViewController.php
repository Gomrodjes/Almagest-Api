<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthViewController extends Controller
{
    public function loginForm()
    {
        return view('authentication.login');
    }

    public function registerForm()
    {
        return view('authentication.register');
    }
}
