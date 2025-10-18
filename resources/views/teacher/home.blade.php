@extends('layouts.dashboard')

@section('content')
<div class="home-container">
    <div class="welcome-section">
        <h1>Welcome Back, {{ Auth::user()->name }}! 👋</h1>
        <p>Here's your personalized Teacher Dashboard</p>
    </div>

    <div class="cards-grid">
        <div class="dashboard-card">
            <div class="card-icon">
                🎓
            </div>
            <h5>My Classes</h5>
            <p>View and manage your classes</p>
            <a href="#" class="card-link">Manage Classes →</a>
        </div>

        <div class="dashboard-card">
            <div class="card-icon">
                👥
            </div>
            <h5>Students</h5>
            <p>See enrolled students and their progress</p>
            <a href="#" class="card-link">View Students →</a>
        </div>

        <div class="dashboard-card">
            <div class="card-icon">
                📄
            </div>
            <h5>Materials</h5>
            <p>Upload and manage course materials</p>
            <a href="#" class="card-link">Manage Materials →</a>
        </div>

        <div class="dashboard-card">
            <div class="card-icon">
                💰
            </div>
            <h5>Earnings</h5>
            <p>Track your income and payments</p>
            <a href="#" class="card-link">View Earnings →</a>
        </div>
    </div>
</div>

<style>
    .home-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .welcome-section {
        margin-bottom: 2.5rem;
    }

    .welcome-section h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .welcome-section p {
        font-size: 1.05rem;
        color: #64748b;
    }

    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .dashboard-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
    }

    .dashboard-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.15);
        border-color: #667eea;
    }

    .card-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .dashboard-card h5 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.75rem;
    }

    .dashboard-card p {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 1.25rem;
        line-height: 1.5;
    }

    .card-link {
        display: inline-block;
        color: #667eea;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .card-link:hover {
        color: #764ba2;
        transform: translateX(4px);
    }

    @media (max-width: 768px) {
        .welcome-section h1 {
            font-size: 1.5rem;
        }

        .cards-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection