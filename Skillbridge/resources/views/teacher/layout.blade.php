<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; display: flex; flex-direction: column; }
        .sidebar { width: 220px; background-color: #f8f9fa; min-height: 100vh; padding-top: 20px; }
        .content { flex: 1; padding: 20px; }
        .navbar-custom { background-color: #f8f9fa; border-bottom: 1px solid #dee2e6; }
        .sidebar a { display: block; padding: 10px 20px; color: #343a40; text-decoration: none; }
        .sidebar a:hover { background-color: #e9ecef; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Back button -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>

        <!-- Centered brand -->
        <a class="navbar-brand mx-auto fw-bold" href="{{ route('teacher.dashboard') }}">SkillBridge</a>

        <!-- Logout + user -->
        <div class="d-flex align-items-center">
            <span class="me-2">Welcome, {{ auth()->user()->name }}</span>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</nav>

<!-- Sidebar + Content -->
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        @include('partials.sidebar_teacher')
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
