<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('manager.index');
    }

    public function myPage(Request $request)
    {
        return view('mypage');
    }

    public function post(Request $request)
    {
        return view('manager.detail', ['id' => $request->id]);
    }

    
}
