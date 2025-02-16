<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('clients')->attempt($credentials)) {
            return redirect()->route('docs');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function logout()
    {
        Auth::guard('clients')->logout();
        return redirect()->route('login');
    }
}
