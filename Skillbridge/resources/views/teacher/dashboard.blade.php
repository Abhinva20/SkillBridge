@extends('layouts.dashboard')

@section('content')
<div class="dashboard-container">
    <div class="welcome-section">
        <h1>Welcome Back, {{ Auth::user()->name }}! 👋</h1>
        <p>Here's what's happening on your Teacher account today</p>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon" style="background: #dbeafe; color: #2563eb;">
                📚
            </div>
            <div class="stat-content">
                <h3>3</h3>
                <p>Active Courses</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #fce7f3; color: #be123c;">
                👥
            </div>
            <div class="stat-content">
                <h3>120</h3>
                <p>Total Students</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #dcfce7; color: #16a34a;">
                💰
            </div>
            <div class="stat-content">
                <h3>₹1,200</h3>
                <p>This Month</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background: #fef3c7; color: #d97706;">
                ⭐
            </div>
            <div class="stat-content">
                <h3>4.8</h3>
                <p>Average Rating</p>
            </div>
        </div>
    </div>

    <!-- Two Column Layout -->
    <div class="dashboard-grid">
        <!-- Recent Enrollments -->
        <div class="dashboard-section">
            <h4>Recent Enrollments</h4>
            <div class="enrollment-list">
                <div class="enrollment-item">
                    <div class="student-avatar">JS</div>
                    <div class="enrollment-details">
                        <p class="student-name">John Smith</p>
                        <p class="course-enrolled">Enrolled in Web Development</p>
                    </div>
                    <span class="enrollment-time">2h ago</span>
                </div>

                <div class="enrollment-item">
                    <div class="student-avatar">AP</div>
                    <div class="enrollment-details">
                        <p class="student-name">Anita Patel</p>
                        <p class="course-enrolled">Enrolled in Python Basics</p>
                    </div>
                    <span class="enrollment-time">5h ago</span>
                </div>

                <div class="enrollment-item">
                    <div class="student-avatar">RK</div>
                    <div class="enrollment-details">
                        <p class="student-name">Rahul Kumar</p>
                        <p class="course-enrolled">Enrolled in Data Science</p>
                    </div>
                    <span class="enrollment-time">1d ago</span>
                </div>
            </div>
        </div>

        <!-- Top Performing Courses -->
        <div class="dashboard-section">
            <h4>Top Performing Courses</h4>
            <div class="courses-list">
                <div class="course-performance">
                    <div class="course-info">
                        <h6>Web Development Bootcamp</h6>
                        <p>65 students enrolled</p>
                    </div>
                    <div class="performance-bar">
                        <div class="bar-fill" style="width: 85%;"></div>
                    </div>
                </div>

                <div class="course-performance">
                    <div class="course-info">
                        <h6>Python for Beginners</h6>
                        <p>42 students enrolled</p>
                    </div>
                    <div class="performance-bar">
                        <div class="bar-fill" style="width: 70%;"></div>
                    </div>
                </div>

                <div class="course-performance">
                    <div class="course-info">
                        <h6>Data Science Fundamentals</h6>
                        <p>13 students enrolled</p>
                    </div>
                    <div class="performance-bar">
                        <div class="bar-fill" style="width: 35%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <h4>Quick Actions</h4>
        <div class="actions-grid">
            <a href="#" class="action-btn">
                <span>➕</span>
                Create Course
            </a>
            <a href="#" class="action-btn">
                <span>📚</span>
                My Courses
            </a>
            <a href="#" class="action-btn">
                <span>👥</span>
                View Students
            </a>
            <a href="#" class="action-btn">
                <span>💵</span>
                Earnings
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

    /* Dashboard Grid */
    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .dashboard-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
    }

    .dashboard-section h4 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1.25rem;
    }

    /* Recent Enrollments */
    .enrollment-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .enrollment-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: #f8fafc;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .enrollment-item:hover {
        background: #f1f5f9;
    }

    .student-avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .enrollment-details {
        flex: 1;
    }

    .student-name {
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }

    .course-enrolled {
        font-size: 0.85rem;
        color: #64748b;
        margin: 0;
    }

    .enrollment-time {
        font-size: 0.85rem;
        color: #94a3b8;
        white-space: nowrap;
    }

    /* Top Performing Courses */
    .courses-list {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .course-performance {
        padding: 1rem;
        background: #f8fafc;
        border-radius: 8px;
    }

    .course-info h6 {
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }

    .course-info p {
        font-size: 0.85rem;
        color: #64748b;
        margin-bottom: 0.75rem;
    }

    .performance-bar {
        height: 8px;
        background: #e2e8f0;
        border-radius: 4px;
        overflow: hidden;
    }

    .bar-fill {
        height: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 4px;
        transition: width 0.3s ease;
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

        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .actions-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection