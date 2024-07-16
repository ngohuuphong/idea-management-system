<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
   public function login(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('signup');
    }

    public function resetPassword(Request $request)
    {
        return view('changePassword');
    }

    public function logout(Request $request)
    {
        return view('login');
    }
}
