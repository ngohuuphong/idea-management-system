<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
   public function login(Request $request)
    {
        return view('account.login');
    }

    public function register(Request $request)
    {
        return view('account.register');
    }

    public function resetPassword(Request $request)
    {
        return view('account.resetPassword');
    }

    public function logout(Request $request)
    {
        return view('account.login');
    }
}
