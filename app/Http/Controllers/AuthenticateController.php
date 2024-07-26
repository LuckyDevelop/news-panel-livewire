<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function loginView()
    {
        return view('authenticate.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard')->with('success', 'You have successfully logged in!');
        }

        session()->flash('error', 'Invalid credentials!');
        return redirect()->back()->withInput($request->only('email'));
    }
}