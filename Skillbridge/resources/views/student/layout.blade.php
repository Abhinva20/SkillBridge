<!DOCTYPE html>
<html>
<head>
    <title>SkillBridge Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; display: flex; flex-direction: column; margin: 0; }
        .sidebar { width: 220px; background-color: #f8f9fa; min-height: 100vh; padding-top: 20px; }
        .content { flex: 1; padding: 20px; }
        .navbar-custom { background-color: #343a40; color: white; }
        .navbar-custom a { color: white; text-decoration: none; }
        .sidebar a { display: block; padding: 10px 20px; color: #343a40; text-decoration: none; }
        .sidebar a:hover { background-color: #e9ecef; }
        .sidebar a.fw-bold.text-primary { background-color: #e9ecef; font-weight: bold; color: #0d6efd !important; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-outline-light">Back</a>
        <a class="navbar-brand mx-auto" href="{{ route('student.dashboard') }}">SkillBridge</a>
        <span class="navbar-text">
            Welcome, {{ Auth::user()->name }}
        </span>
    </div>
</nav>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        @include('partials.sidebar_student')
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button class="btn btn-link">Logout</button>
        </form>
    </div>

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
