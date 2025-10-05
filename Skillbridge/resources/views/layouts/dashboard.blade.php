<!DOCTYPE html>
<html>
<head>
    <title>SkillBridge Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; display: flex; flex-direction: column; }
        .sidebar { width: 220px; background-color: #f8f9fa; min-height: 100vh; padding-top: 20px; }
        .content { flex: 1; padding: 20px; }
        .navbar-custom { background-color: #343a40; color: white; }
        .navbar-custom a { color: white; text-decoration: none; }
        .sidebar a { display: block; padding: 10px 20px; color: #343a40; text-decoration: none; }
        .sidebar a:hover { background-color: #e9ecef; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="
            @auth
                {{ Auth::user()->role === 'student' ? route('student.home') : route('teacher.home') }}
            @else
                {{ url('/') }}
            @endauth
        ">SkillBridge</a>
        <div class="d-flex">
            <span class="navbar-text">
                Welcome, {{ Auth::user()->name }}
            </span>
        </div>
    </div>
</nav>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        @if(Auth::user()->role === 'student')
            @include('partials.sidebar_student')
        @elseif(Auth::user()->role === 'teacher')
            @include('partials.sidebar_teacher')
        @endif
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-link" type="submit">Logout</button>
        </form>
    </div>

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
