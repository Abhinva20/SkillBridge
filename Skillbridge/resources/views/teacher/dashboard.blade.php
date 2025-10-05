@extends('layouts.dashboard')

@section('content')
<h2>Welcome Back, {{ Auth::user()->name }}!</h2>
<p>Here’s what’s happening on your Teacher account today.</p>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card p-3">
            <h5>My Classes</h5>
            <p>You are teaching 3 classes</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Students</h5>
            <p>Currently enrolled: 120</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Earnings</h5>
            <p>$1,200 this month</p>
        </div>
    </div>
</div>
@endsection
