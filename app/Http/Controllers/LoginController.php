<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanLogin()
    {
        return view('login');
    }

    public function halamanRegistrasi()
    {
        return view('registrasi');
    }
}
