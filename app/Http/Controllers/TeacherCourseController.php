<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class TeacherCourseController extends Controller
{
    public function create()
    {
        return view('teacher.createcourse');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string|max:50',
        ]);

        // Create course
        Course::create([
            'teacher_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
        ]);

        return redirect()->route('teacher.dashboard')->with('success', 'Course created successfully!');
    }
}

