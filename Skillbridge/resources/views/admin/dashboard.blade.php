@extends('layouts.adminlayout')

@section('content')
<div class="dashboard-header mb-4">
    <h2>Dashboard Overview</h2>
    <p class="text-muted">Welcome back! Here's what's happening with SkillBridge today.</p>
</div>

<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="stat-icon bg-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
            </div>
            <div class="stat-content">
                <h3>1,234</h3>
                <p>Total Users</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="stat-icon bg-success">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
            </div>
            <div class="stat-content">
                <h3>567</h3>
                <p>Total Courses</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="stat-icon bg-warning">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="stat-content">
                <h3>89</h3>
                <p>Active Teachers</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card">
            <div class="stat-icon bg-info">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="12" y1="1" x2="12" y2="23"></line>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
            </div>
            <div class="stat-content">
                <h3>$12,450</h3>
                <p>Revenue (MTD)</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity & Quick Actions -->
<div class="row g-4">
    <div class="col-lg-8">
        <div class="content-card">
            <div class="card-header">
                <h5>Recent Activity</h5>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon bg-success-light">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <p class="activity-title">New user registered</p>
                        <p class="activity-time">John Doe joined as a student • 5 min ago</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon bg-primary-light">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <p class="activity-title">New course published</p>
                        <p class="activity-time">"Advanced React Development" by Sarah Smith • 1 hour ago</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon bg-warning-light">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <p class="activity-title">Live class started</p>
                        <p class="activity-time">"Introduction to Python" by Mike Johnson • 2 hours ago</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon bg-info-light">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <p class="activity-title">Payment received</p>
                        <p class="activity-time">$299 for "Web Development Bootcamp" • 3 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="content-card">
            <div class="card-header">
                <h5>Quick Actions</h5>
            </div>
            <div class="quick-actions">
                <a href="#" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    <span>Add New User</span>
                </a>
                
                <a href="#" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <span>Manage Courses</span>
                </a>
                
                <a href="#" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span>View Reports</span>
                </a>
                
                <a href="#" class="action-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6m8.66-10l-5.2 3M8.54 14l-5.2 3m15.32 0l-5.2-3M8.54 10l-5.2-3"></path>
                    </svg>
                    <span>Settings</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .dashboard-header h2 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    /* Stat Cards */
    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: all 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }

    .stat-icon.bg-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .stat-icon.bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    .stat-icon.bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }

    .stat-icon.bg-info {
        background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
    }

    .stat-content h3 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    .stat-content p {
        font-size: 0.875rem;
        color: #6b7280;
        margin: 0;
    }

    /* Content Cards */
    .content-card {
        background: white;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }

    .card-header {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #e5e7eb;
    }

    .card-header h5 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1f2937;
        margin: 0;
    }

    /* Activity List */
    .activity-list {
        padding: 0.5rem;
    }

    .activity-item {
        display: flex;
        gap: 1rem;
        padding: 1rem;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .activity-item:hover {
        background: #f9fafb;
    }

    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .activity-icon.bg-success-light {
        background: #d1fae5;
        color: #059669;
    }

    .activity-icon.bg-primary-light {
        background: #e0e7ff;
        color: #667eea;
    }

    .activity-icon.bg-warning-light {
        background: #fef3c7;
        color: #d97706;
    }

    .activity-icon.bg-info-light {
        background: #cffafe;
        color: #0891b2;
    }

    .activity-content {
        flex: 1;
    }

    .activity-title {
        font-weight: 500;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    .activity-time {
        font-size: 0.875rem;
        color: #6b7280;
        margin: 0;
    }

    /* Quick Actions */
    .quick-actions {
        padding: 0.5rem;
    }

    .action-btn {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 1rem;
        border-radius: 8px;
        text-decoration: none;
        color: #374151;
        font-weight: 500;
        transition: all 0.2s ease;
        margin-bottom: 0.5rem;
    }

    .action-btn:last-child {
        margin-bottom: 0;
    }

    .action-btn:hover {
        background: #f3f4f6;
        color: #1f2937;
        transform: translateX(4px);
    }

    .action-btn svg {
        color: #6b7280;
        flex-shrink: 0;
    }
</style>
@endsection