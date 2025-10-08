@extends('teacher.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="d-flex align-items-center mb-4">
                <div class="settings-icon me-3">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6m8.66-10l-5.2 3M8.54 14l-5.2 3m15.32 0l-5.2-3M8.54 10l-5.2-3"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="mb-0">Account Settings</h3>
                    <p class="text-muted mb-0">Manage your profile and security settings</p>
                </div>
            </div>

            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2" style="vertical-align: text-bottom;">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Settings Card -->
            <div class="settings-card">
                <form method="POST" action="{{ route('teacher.settings.update') }}">
                    @csrf

                    <!-- Profile Section -->
                    <div class="settings-section">
                        <h5 class="section-title">Profile Information</h5>
                        
                        <div class="mb-4">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" value="{{ old('name', $teacher->name) }}" 
                                   class="form-control form-control-modern" required>
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" value="{{ old('email', $teacher->email) }}" 
                                   class="form-control form-control-modern" required>
                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div class="settings-section">
                        <h5 class="section-title">Change Password</h5>
                        <p class="text-muted small mb-3">Leave blank if you don't want to change your password</p>
                        
                        <div class="mb-4">
                            <label class="form-label">New Password</label>
                            <input type="password" name="password" 
                                   class="form-control form-control-modern" 
                                   placeholder="Enter new password">
                            @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" name="password_confirmation" 
                                   class="form-control form-control-modern" 
                                   placeholder="Confirm new password">
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" onclick="window.location.reload()">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1" style="vertical-align: text-bottom;">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg>
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .settings-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .settings-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border: 1px solid #e5e7eb;
    }

    .settings-section {
        padding-bottom: 2rem;
        margin-bottom: 2rem;
        border-bottom: 1px solid #e5e7eb;
    }

    .settings-section:last-of-type {
        border-bottom: none;
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 1rem;
    }

    .form-label {
        font-weight: 500;
        color: #374151;
        margin-bottom: 0.5rem;
    }

    .form-control-modern {
        border: 1.5px solid #d1d5db;
        border-radius: 8px;
        padding: 0.625rem 0.875rem;
        transition: all 0.2s ease;
    }

    .form-control-modern:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .btn {
        padding: 0.625rem 1.25rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .btn-secondary {
        background: #f3f4f6;
        border: 1px solid #d1d5db;
        color: #374151;
    }

    .btn-secondary:hover {
        background: #e5e7eb;
        border-color: #9ca3af;
        color: #1f2937;
    }

    .alert {
        border-radius: 8px;
        border: none;
    }

    .alert-success {
        background-color: #d1fae5;
        color: #065f46;
        display: flex;
        align-items: center;
    }
</style>
@endsection