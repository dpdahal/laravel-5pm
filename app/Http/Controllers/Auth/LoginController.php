<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Invalid credentials');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');

    }
}
