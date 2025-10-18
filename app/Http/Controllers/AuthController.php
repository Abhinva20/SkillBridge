<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:student,teacher',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === $request->role) {
                if (Auth::user()->role === 'student') {
                    return redirect()->route('student.home'); // student homepage
                } elseif (Auth::user()->role === 'teacher') {
                    return redirect()->route('teacher.home'); // teacher dashboard
                }
            } else {
                Auth::logout();
                return back()->withErrors(['role' => 'Invalid role for this account']);
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show register form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:student,teacher',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        return redirect()->route($user->role.'.dashboard');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
