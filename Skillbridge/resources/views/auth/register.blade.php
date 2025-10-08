<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SkillBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .register-container {
            width: 100%;
            max-width: 480px;
        }

        .register-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .register-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .register-header p {
            color: #6b7280;
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-control {
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .btn-register {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease;
            margin-top: 0.5rem;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .login-link a {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .login-link a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .alert {
            border-radius: 8px;
            padding: 0.875rem 1rem;
            margin-bottom: 1.25rem;
            border: none;
            font-size: 0.9rem;
        }

        .alert-danger {
            background-color: #fee;
            color: #dc2626;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        .alert-danger li {
            margin-bottom: 0.25rem;
        }

        .alert-danger li:last-child {
            margin-bottom: 0;
        }

        /* Role selector styling */
        .role-selector {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .role-option {
            flex: 1;
        }

        .role-option input[type="radio"] {
            display: none;
        }

        .role-option label {
            display: block;
            padding: 1rem;
            border: 2px solid #d1d5db;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            font-weight: 500;
            color: #6b7280;
        }

        .role-option input[type="radio"]:checked + label {
            border-color: #667eea;
            background: #f1f5fe;
            color: #667eea;
        }

        .role-option label:hover {
            border-color: #9ca3af;
        }

        /* Password strength indicator */
        .password-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 2rem 1.5rem;
            }

            .register-header h2 {
                font-size: 1.5rem;
            }

            .password-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="logo">SB</div>
                <h2>Create Account</h2>
                <p>Join SkillBridge and start your learning journey</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                
                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" 
                            placeholder="Enter your full name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" 
                            placeholder="you@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label d-block">I want to join as</label>
                    <div class="role-selector">
                        <div class="role-option">
                            <input type="radio" name="role" value="student" id="role-student" 
                                    {{ old('role', 'student') == 'student' ? 'checked' : '' }} required>
                            <label for="role-student">Student</label>
                        </div>
                        <div class="role-option">
                            <input type="radio" name="role" value="teacher" id="role-teacher"
                                    {{ old('role') == 'teacher' ? 'checked' : '' }}>
                            <label for="role-teacher">Teacher</label>
                        </div>
                    </div>
                </div>

                <div class="password-row">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" 
                                placeholder="Min. 8 characters" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" 
                                placeholder="Re-enter password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-register">Create Account</button>
            </form>

            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>