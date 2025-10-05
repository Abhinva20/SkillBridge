@extends('layouts.dashboard')

@section('content')
<h2>Welcome Back, {{ Auth::user()->name }}!</h2>
<p>Here’s what’s happening on your SkillBridge account today.</p>
<!-- You can add more widgets, cards, stats here -->
@endsection
