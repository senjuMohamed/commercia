<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{   
     public function showLogin() {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Login simulé
        if ($username === 'admin' && $password === 'password') {
            return back()->with('message', 'Login successful!');
        }

        return back()->with('error', 'Invalid credentials.');
    }
     public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Inscription réussie ! Connectez-vous.');
    }
}
