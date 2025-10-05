@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Welcome Back, {{ Auth::user()->name }}!</h2>
    <p>Here’s your personalized Teacher Dashboard.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>My Classes</h5>
                <p>View and manage your classes.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Students</h5>
                <p>See enrolled students and their progress.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Materials</h5>
                <p>Upload and manage course materials.</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Earnings</h5>
                <p>Track your income and payments.</p>
            </div>
        </div>
    </div>
</div>
@endsection
