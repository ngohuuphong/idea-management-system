<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEOController extends Controller
{
    //
    public function dashboard(Request $request)
    {
        return view('ceo.dashboard');
    }

    public function myPage(Request $request)
    {
        return view('ceo.myPage');
    }

    public function idealList(Request $request)
    {
        return view('ceo.idealList');
    }

    public function ideal(Request $request)
    {
        return view('ceo.ideal', ['id' => $request->id]);
    }

    public function report(Request $request)
    {
        return view('ceo.report');
    }
    
}
