<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('main.bootstrap');        
    }
    public function login()
    {
        return view('page.login');
    }
    public function auth(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->intended('');
        }
        return redirect()->back()->with('error', 'Email atau Password salah❌');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
