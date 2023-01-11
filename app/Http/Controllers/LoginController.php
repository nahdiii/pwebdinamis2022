<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

use Auth;

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

    public function postLogin(Request $request)
    {
        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        )) {
            return redirect('/');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
