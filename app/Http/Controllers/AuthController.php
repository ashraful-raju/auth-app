<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $data = $request->validate([
            'username' => ['string', 'required'],
            // 'email' => ['string', 'email', 'required'],
            'password' => ['string', 'required']
        ]);
        if (Auth::attempt($data, $request->boolean('remember_me'))) {
            return redirect('/home');
        }

        return back()->withErrors(['username' => 'Invalid Credentials'])->withInput();
    }


    function showRegisterForm()
    {
        return view('auth.registration');
    }
    function registration(Request $request)
    {
        $data = $request->validate([
            'name' => ['string', 'max:191', 'required'],
            'username' => ['string', 'max:51', 'unique:users', 'required', 'regex:/^[a-zA-Z0-9]+$/'],
            'email' => ['string', 'email', 'unique:users', 'required'],
            'password' => ['string', 'required', 'confirmed']
        ]);

        User::create($data);

        return redirect()->route('login')->with('message', 'Registration successful');
    }
}
