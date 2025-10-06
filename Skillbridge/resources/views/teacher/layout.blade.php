<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Back button on the left -->
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>

        <!-- Centered brand -->
        <a class="navbar-brand mx-auto" href="{{ route('teacher.dashboard') }}">SkillBridge</a>

        <!-- Optional user greeting on the right -->
        <div>
            Welcome, {{ auth()->user()->name }}
            <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm ms-2"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</nav>


    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
