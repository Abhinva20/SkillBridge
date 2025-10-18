<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function settings()
    {
        $teacher = Auth::user();
        return view('teacher.settings', compact('teacher'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $teacher = Auth::user();
        $teacher->name = $request->name;
        $teacher->email = $request->email;

        if ($request->password) {
            $teacher->password = Hash::make($request->password);
        }

        $teacher->save();

        return back()->with('success', 'Profile updated successfully!');
    }
}

