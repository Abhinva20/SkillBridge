<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | SkillBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f7fa;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar-custom {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-custom .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 0.5px;
            transition: opacity 0.2s ease;
        }

        .navbar-custom .navbar-brand:hover {
            opacity: 0.9;
        }

        .navbar-custom .navbar-text {
            color: rgba(255,255,255,0.95);
            font-weight: 500;
        }

        /* Layout */
        .main-wrapper {
            display: flex;
            min-height: calc(100vh - 73px);
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: white;
            border-right: 1px solid #e2e8f0;
            padding: 1.5rem 0;
        }

        .sidebar-title {
            padding: 0 1.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
        }

        .sidebar a {
            display: block;
            padding: 0.875rem 1.5rem;
            color: #475569;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }

        .sidebar a:hover {
            background-color: #f8fafc;
            color: #1e293b;
            border-left-color: #1e293b;
        }

        .sidebar a.active {
            background-color: #f1f5f9;
            color: #1e293b;
            border-left-color: #1e293b;
            font-weight: 600;
        }

        .logout-section {
            margin-top: 2rem;
            padding: 0 1.5rem;
        }

        .btn-logout {
            width: 100%;
            padding: 0.75rem;
            background-color: #fee;
            color: #dc2626;
            border: 1px solid #fecaca;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-logout:hover {
            background-color: #fecaca;
            border-color: #fca5a5;
        }

        /* Content Area */
        .content {
            flex: 1;
            padding: 2rem;
            overflow-y: auto;
        }

        /* Admin Badge */
        .admin-badge {
            background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            
            .content {
                padding: 1rem;
            }

            .navbar-custom .navbar-text {
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                SkillBridge
                <span class="admin-badge">Admin</span>
            </a>
            <span class="navbar-text">
                Welcome, {{ Auth::guard('admin')->user()->name }}
            </span>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-title">Menu</div>
            
            <a href="{{ route('admin.dashboard') }}" 
                class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                Dashboard
            </a>
            
            <a href="#">
                Manage Users
            </a>
            
            <a href="#">
                Manage Courses
            </a>
            
            <a href="#">
                Payments
            </a>
            
            <a href="#">
                Reports
            </a>
            
            <a href="#">
                Settings
            </a>
            
            <div class="logout-section">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="content">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>