<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('member.index');
    }

    public function myPage(Request $request)
    {
        return view('member.myPage');
    }

    public function post(Request $request)
    {
        return view('member.post', ['id' => $request->id]);
    }

    
}
