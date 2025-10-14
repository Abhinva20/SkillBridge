@extends('student.layout')

@section('content')
<div class="settings-container">
    <div class="settings-header">
        <h2>Account Settings</h2>
        <p class="text-muted">Manage your account information and password</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-custom">
            ✓
            {{ session('success') }}
        </div>
    @endif

    <div class="settings-card">
        <form method="POST" action="{{ route('settings.update') }}">
            @csrf

            <div class="form-section">
                <h5 class="section-title">Personal Information</h5>
                
                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name', $student->name) }}"
                        class="form-input"
                        placeholder="Enter your full name"
                        required
                    >
                    <small id="nameError" class="text-danger" style="display:none;"></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email', $student->email) }}"
                        class="form-input"
                        placeholder="your.email@example.com"
                        required
                    >
                    <small id="emailError" class="text-danger" style="display:none;"></small>
                </div>
            </div>

            <div class="form-section">
                <h5 class="section-title">Change Password</h5>
                <p class="section-description">Leave blank if you don't want to change your password</p>
                
                <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-input"
                        placeholder="Enter new password"
                    >
                    <small id="passwordError" class="text-danger" style="display:none;"></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Confirm New Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-input"
                        placeholder="Confirm new password"
                    >
                    <small id="passwordConfirmError" class="text-danger" style="display:none;"></small>
                </div>
            </div>


            <div class="form-actions">
                <button type="submit" class="btn-save">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .settings-container {
        max-width: 700px;
        margin: 0 auto;
    }

    .settings-header {
        margin-bottom: 2rem;
    }

    .settings-header h2 {
        font-size: 1.75rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .settings-header .text-muted {
        color: #64748b;
        font-size: 0.95rem;
    }

    .alert-custom {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.25rem;
        border-radius: 10px;
        border: 1px solid #86efac;
        background-color: #f0fdf4;
        color: #16a34a;
        margin-bottom: 1.5rem;
    }

    .settings-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    .form-section {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #e2e8f0;
    }

    .form-section:last-of-type {
        border-bottom: none;
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .section-description {
        color: #64748b;
        font-size: 0.9rem;
        margin-bottom: 1.25rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-label {
        display: block;
        font-weight: 500;
        color: #334155;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        background-color: #fff;
    }

    .form-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-input::placeholder {
        color: #94a3b8;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        padding-top: 1rem;
    }

    .btn-save {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-save:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }

    .btn-save:active {
        transform: translateY(0);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nameInput = document.getElementById('name');
        const nameError = document.getElementById('nameError');

        const nameRegex = /^[A-Za-z\s]+$/; // letters and spaces only

        nameInput.addEventListener('input', validateName);
        nameInput.addEventListener('blur', validateName);

        function validateName() {
            const name = nameInput.value.trim();

            if (name === '') {
                showError(nameInput, nameError, 'Full name is required.');
                return false;
            } else if (name.length < 3) {
                showError(nameInput, nameError, 'Name must be at least 3 characters.');
                return false;
            } else if (name.length > 50) {
                showError(nameInput, nameError, 'Name cannot exceed 50 characters.');
                return false;
            } else if (!nameRegex.test(name)) {
                showError(nameInput, nameError, 'Name can only contain letters and spaces.');
                return false;
            } else {
                hideError(nameInput, nameError);
                return true;
            }
        }

        function showError(input, errorElement, message) {
            errorElement.style.display = 'block';
            errorElement.textContent = message;
            input.classList.add('is-invalid');
        }

        function hideError(input, errorElement) {
            errorElement.style.display = 'none';
            input.classList.remove('is-invalid');
        }

        // Prevent form submission if invalid
        const form = nameInput.closest('form');
        form.addEventListener('submit', function(e) {
            if (!validateName()) {
                e.preventDefault();
                alert('Please fix the errors before submitting.');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const emailInput = document.getElementById('email');
        const emailError = document.getElementById('emailError');

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        emailInput.addEventListener('input', validateEmail);
        emailInput.addEventListener('blur', validateEmail);

        function validateEmail() {
            const email = emailInput.value.trim();

            if (email === '') {
                showError(emailInput, emailError, 'Email is required.');
                return false;
            } else if (!emailRegex.test(email)) {
                showError(emailInput, emailError, 'Please enter a valid email address.');
                return false;
            } else {
                hideError(emailInput, emailError);
                return true;
            }
        }

        function showError(input, errorElement, message) {
            errorElement.style.display = 'block';
            errorElement.textContent = message;
            input.classList.add('is-invalid');
        }

        function hideError(input, errorElement) {
            errorElement.style.display = 'none';
            input.classList.remove('is-invalid');
        }

        // Prevent form submission if invalid
        const form = emailInput.closest('form');
        form.addEventListener('submit', function(e) {
            if (!validateEmail()) {
                e.preventDefault();
                alert('Please fix the errors before submitting.');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');
        const passwordError = document.getElementById('passwordError');
        const passwordConfirmError = document.getElementById('passwordConfirmError');

        passwordInput.addEventListener('input', validatePassword);
        passwordInput.addEventListener('blur', validatePassword);
        passwordConfirmInput.addEventListener('input', validatePassword);
        passwordConfirmInput.addEventListener('blur', validatePassword);

        function validatePassword() {
            const password = passwordInput.value.trim();
            const confirm = passwordConfirmInput.value.trim();
            let valid = true;

            // Only validate if a new password is entered
            if (password !== '') {
                if (password.length < 8) {
                    showError(passwordInput, passwordError, 'Password must be at least 8 characters.');
                    valid = false;
                } else {
                    hideError(passwordInput, passwordError);
                }

                if (confirm !== '' && password !== confirm) {
                    showError(passwordConfirmInput, passwordConfirmError, 'Passwords do not match.');
                    valid = false;
                } else {
                    hideError(passwordConfirmInput, passwordConfirmError);
                }
            } else {
                hideError(passwordInput, passwordError);
                hideError(passwordConfirmInput, passwordConfirmError);
            }

            return valid;
        }

        function showError(input, errorElement, message) {
            errorElement.style.display = 'block';
            errorElement.textContent = message;
            input.classList.add('is-invalid');
        }

        function hideError(input, errorElement) {
            errorElement.style.display = 'none';
            input.classList.remove('is-invalid');
        }

        // Prevent form submission if invalid
        const form = passwordInput.closest('form');
        form.addEventListener('submit', function(e) {
            if (!validatePassword()) {
                e.preventDefault();
                alert('Please fix the password errors before submitting.');
            }
        });
    });
    </script>
@endsection