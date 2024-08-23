<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login');
        }
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


    public function register(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.register');
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
                'gender' => 'required',
                'image' => 'nullable|mimes:jpeg,png,jpg,gif'
            ]);

            $data = $request->all();
            $data['password'] = bcrypt($request->password);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/users');
                $image->move($destinationPath, $name);
                $data['image'] = "users/" . $name;
            }
            try {
                User::create($data);
                return redirect()->back()->with('success', 'User created successfully');
            } catch (\Exception $e) {
                return back()->with('error', 'Something went wrong');
            }
        }

    }
}
