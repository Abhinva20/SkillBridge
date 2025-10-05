@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Welcome Back, {{ Auth::user()->name }}!</h2>
    <p>Here’s your personalized Student Dashboard.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>My Courses</h5>
                <p>View and manage your enrolled courses.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Find Instructor</h5>
                <p>Explore available instructors and schedule sessions.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Mock Tests</h5>
                <p>Practice and track your performance.</p>
            </div>
        </div>
    </div>
</div>
@endsection
