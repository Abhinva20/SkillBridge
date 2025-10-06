<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class StudentCourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with('teacher');

        if ($request->has('q') && $request->q != '') {
            $search = $request->q;
            $query->where('title', 'like', "%$search%")
                ->orWhereHas('teacher', function($q) use ($search) {
                    $q->where('name', 'like', "%$search%");
                });
        }

        $courses = $query->latest()->get();

        return view('student.findcourses', compact('courses'));
    }
}
