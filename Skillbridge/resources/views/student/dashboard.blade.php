@extends('layouts.dashboard')

@section('content')
<div class="dashboard-container">
    <div class="welcome-section">
        <h1>Welcome Back, {{ Auth::user()->name }}! 👋</h1>
        <p>Here's what's happening on your SkillBridge account today</p>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon" style="background: #dbeafe; color: #2563eb;">
                📚
            </div>
            <div class="stat-content">
                <h3>12</h3>
                <p>Enrolled Courses</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #dcfce7; color: #16a34a;">
                ✓
            </div>
            <div class="stat-content">
                <h3>8</h3>
                <p>Completed Courses</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #fef3c7; color: #d97706;">
                ⏳
            </div>
            <div class="stat-content">
                <h3>4</h3>
                <p>In Progress</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #fce7f3; color: #be123c;">
                🎯
            </div>
            <div class="stat-content">
                <h3>85%</h3>
                <p>Average Score</p>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="activity-section">
        <h4>Recent Activity</h4>
        <div class="activity-list">
            <div class="activity-item">
                <div class="activity-icon">📖</div>
                <div class="activity-details">
                    <p class="activity-title">Started "Advanced Web Development"</p>
                    <p class="activity-time">2 hours ago</p>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">✅</div>
                <div class="activity-details">
                    <p class="activity-title">Completed "Introduction to Python"</p>
                    <p class="activity-time">Yesterday</p>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">📝</div>
                <div class="activity-details">
                    <p class="activity-title">Submitted assignment for "Database Design"</p>
                    <p class="activity-time">2 days ago</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <h4>Quick Actions</h4>
        <div class="actions-grid">
            <a href="#" class="action-btn">
                <span>🔍</span>
                Browse Courses
            </a>
            <a href="#" class="action-btn">
                <span>👨‍🏫</span>
                Find Instructor
            </a>
            <a href="#" class="action-btn">
                <span>📊</span>
                View Progress
            </a>
            <a href="#" class="action-btn">
                <span>⚙️</span>
                Settings
            </a>
        </div>
    </div>
</div>

<style>
    .dashboard-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .welcome-section {
        margin-bottom: 2rem;
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

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        flex-shrink: 0;
    }

    .stat-content h3 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }

    .stat-content p {
        font-size: 0.9rem;
        color: #64748b;
        margin: 0;
    }

    /* Recent Activity */
    .activity-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
    }

    .activity-section h4 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1.25rem;
    }

    .activity-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .activity-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .activity-item:hover {
        background: #f1f5f9;
    }

    .activity-icon {
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border-radius: 8px;
        flex-shrink: 0;
    }

    .activity-details {
        flex: 1;
    }

    .activity-title {
        font-weight: 500;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }

    .activity-time {
        font-size: 0.85rem;
        color: #64748b;
        margin: 0;
    }

    /* Quick Actions */
    .quick-actions {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
    }

    .quick-actions h4 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1.25rem;
    }

    .actions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .action-btn {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 8px;
        text-decoration: none;
        color: #334155;
        font-weight: 500;
        transition: all 0.2s ease;
        border: 1px solid #e2e8f0;
    }

    .action-btn:hover {
        background: #667eea;
        color: white;
        border-color: #667eea;
        transform: translateY(-2px);
    }

    .action-btn span {
        font-size: 1.5rem;
    }

    @media (max-width: 768px) {
        .welcome-section h1 {
            font-size: 1.5rem;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .actions-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection