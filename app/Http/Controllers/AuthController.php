<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return View('survei');
    }
    public function login()
    {
        return view('login');
    }
    // public function register()
    // {
    //     $departemen = Departemen::all();
    //     $cabang = Cabang::all();
    //     return view('register', compact('departemen', 'cabang'));
    // }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



        //login valid?

        if (Auth::attempt($credentials)) {


            return redirect('/Dashboard');

            // $request->session()->regenerate();

            // return redirect()->intended('dashboard');


        }
        return back()->withErrors('password')->with('failed', 'Email atau Password Salah !!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
