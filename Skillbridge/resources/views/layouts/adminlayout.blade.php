<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | SkillBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">SkillBridge Admin</a>
            <div class="d-flex align-items-center ms-auto">
                <span class="text-white me-3">Welcome, {{ Auth::guard('admin')->user()->name }}</span>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Main Layout --}}
    <div class="d-flex">
        {{-- Sidebar --}}
        <div class="bg-dark text-white p-3" style="width: 240px; min-height: 100vh;">
            <h5 class="mb-4">Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'fw-bold text-warning' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Manage Users</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Manage Courses</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Payments</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Reports</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Settings</a>
                </li>
            </ul>
        </div>

        {{-- Page Content --}}
        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>
    </div>

</body>
</html>
