<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('member.index');
    }

    public function myPage(Request $request)
    {
        return view('mypage');
    }

    public function post(Request $request)
    {
        return view('member.postView', ['id' => $request->id]);
    }

    public function newPost(Request $request)
    {
        return view('member.post');
    }
}
