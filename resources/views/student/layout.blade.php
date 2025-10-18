<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge Dashboard</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-custom .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 0.5px;
        }

        .navbar-custom .navbar-text {
            color: rgba(255,255,255,0.95);
            font-weight: 500;
        }

        .btn-back {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: rgba(255,255,255,0.3);
            color: white;
            transform: translateX(-2px);
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
            color: #667eea;
            border-left-color: #667eea;
        }

        .sidebar a.active {
            background-color: #f1f5fe;
            color: #667eea;
            border-left-color: #667eea;
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

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            
            .content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <a href="{{ url()->previous() }}" class="btn btn-back">← Back</a>
            <a class="navbar-brand mx-auto" href="{{ route('student.dashboard') }}">SkillBridge</a>
            <span class="navbar-text">
                Welcome, {{ Auth::user()->name }}
            </span>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            @include('partials.sidebar_student')
            
            <div class="logout-section">
                <form method="POST" action="{{ route('logout') }}">
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