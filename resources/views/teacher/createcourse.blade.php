@extends('teacher.layout')

@section('content')
<div class="create-course-container">
    <div class="page-header">
        <h1>Create a New Course</h1>
        <p>Share your knowledge and help students learn</p>
    </div>

    {{-- Display success message --}}
    @if(session('success'))
        <div class="alert alert-success alert-custom">
            ✓ {{ session('success') }}
        </div>
    @endif

    {{-- Display validation errors --}}
    @if($errors->any())
        <div class="alert alert-danger alert-custom">
            <div class="alert-icon">⚠️</div>
            <div>
                <strong>Please fix the following errors:</strong>
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="form-card">
        <form action="{{ route('teacher.course.store') }}" method="POST">
            @csrf
            
            <div class="form-section">
                <h5 class="section-title">Course Information</h5>
                
                <div class="form-group">
                    <label class="form-label">Course Title</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control"
                        placeholder="e.g. Introduction to Web Development"
                        value="{{ old('title') }}"
                        required
                    >
                    <small id="titleError" class="text-danger" style="display:none;"></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        rows="6" 
                        placeholder="Describe what students will learn in this course..."
                        required
                    >{{ old('description') }}</textarea>
                    <small id="descriptionError" class="text-danger" style="display:none;"></small>
                </div>
            </div>

            <div class="form-section">
                <h5 class="section-title">Course Details</h5>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Price (₹)</label>
                        <div class="input-with-icon">
                            <span class="input-icon"></span>
                            <input 
                                type="number" 
                                name="price" 
                                id="price" 
                                class="form-control with-icon" 
                                placeholder="999"
                                value="{{ old('price') }}" 
                                required
                            >
                            <small id="priceError" class="text-danger" style="display:none;"></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Duration</label>
                        <input 
                            type="text" 
                            name="duration" 
                            id="duration" 
                            class="form-control" 
                            placeholder="e.g. 4 weeks, 30 hours"
                            value="{{ old('duration') }}" 
                            required
                        >
                        <small id="durationError" class="text-danger" style="display:none;"></small>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" id="createCourseBtn" class="btn-submit">Create Course</button>
            </div>
        </form>
    </div>
</div>

<style>
    .create-course-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .page-header {
        margin-bottom: 2rem;
    }

    .page-header h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .page-header p {
        font-size: 1.05rem;
        color: #64748b;
    }

    /* Alerts */
    .alert-custom {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        padding: 1rem 1.25rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
    }

    .alert-success {
        border: 1px solid #86efac;
        background-color: #f0fdf4;
        color: #16a34a;
    }

    .alert-danger {
        border: 1px solid #fca5a5;
        background-color: #fef2f2;
        color: #dc2626;
    }

    .alert-icon {
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    .alert-danger ul {
        margin: 0.5rem 0 0 0;
        padding-left: 1.25rem;
    }

    .alert-danger li {
        margin-bottom: 0.25rem;
    }

    /* Form Card */
    .form-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
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

    .form-input,
    .form-textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        font-family: inherit;
    }

    .form-input:focus,
    .form-textarea:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-input::placeholder,
    .form-textarea::placeholder {
        color: #94a3b8;
    }

    .form-textarea {
        resize: vertical;
    }

    /* Input with Icon */
    .input-with-icon {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
        font-weight: 600;
    }

    .form-input.with-icon {
        padding-left: 2.5rem;
    }

    /* Form Row */
    .form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    /* Form Actions */
    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        padding-top: 1rem;
    }

    .btn-cancel {
        padding: 0.75rem 1.75rem;
        border: 1px solid #cbd5e1;
        background: white;
        color: #64748b;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .btn-cancel:hover {
        background: #f8fafc;
        border-color: #94a3b8;
        color: #475569;
    }

    .btn-submit {
        padding: 0.75rem 2rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-submit:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 1.5rem;
        }

        .form-card {
            padding: 1.5rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn-cancel,
        .btn-submit {
            width: 100%;
            text-align: center;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Grab elements
        const titleInput = document.getElementById('title');
        const titleError = document.getElementById('titleError');
        const descriptionInput = document.getElementById('description');
        const descriptionError = document.getElementById('descriptionError');
        const priceInput = document.getElementById('price');
        const priceError = document.getElementById('priceError');
        const durationInput = document.getElementById('duration');
        const durationError = document.getElementById('durationError');
        const form = document.querySelector('form');
        const submitBtn = document.getElementById('createCourseBtn');

        // Regex patterns
        const titleRegex = /^[A-Za-z0-9\s.,:;!?&()\-+#]+$/;
        const durationRegex = /^[A-Za-z0-9\s]+$/;

        // Live validation events
        titleInput.addEventListener('blur', () => validateTitle());
        titleInput.addEventListener('input', () => validateTitle());
        
        descriptionInput.addEventListener('blur', () => validateDescription());
        descriptionInput.addEventListener('input', () => validateDescription());
        
        priceInput.addEventListener('blur', () => validatePrice());
        priceInput.addEventListener('input', () => validatePrice());
        
        durationInput.addEventListener('blur', () => validateDuration());
        durationInput.addEventListener('input', () => validateDuration());

        // Form submit handler - using both submit event and button click
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Always prevent default first
            
            if (validateAllFields()) {
                // If valid, submit the form programmatically
                this.submit();
            } else {
                alert("Please fix the errors before submitting.");
                return false;
            }
        });

        // Also handle button click directly
        if (submitBtn) {
            submitBtn.addEventListener('click', function(e) {
                if (!validateAllFields()) {
                    e.preventDefault();
                    e.stopPropagation();
                    alert("Please fix the errors before submitting.");
                    return false;
                }
            });
        }

        // Validate all fields
        function validateAllFields() {
            const isTitleValid = validateTitle();
            const isDescValid = validateDescription();
            const isPriceValid = validatePrice();
            const isDurationValid = validateDuration();
            
            console.log('Validation Results:', {
                title: isTitleValid,
                description: isDescValid,
                price: isPriceValid,
                duration: isDurationValid
            });
            
            return isTitleValid && isDescValid && isPriceValid && isDurationValid;
        }

        // Title validation
        function validateTitle() {
            const title = titleInput.value.trim();
            
            if (title === '') {
                showError(titleInput, titleError, 'Course title is required.');
                return false;
            }
            if (title.length < 5) {
                showError(titleInput, titleError, 'Course title must be at least 5 characters long.');
                return false;
            }
            if (title.length > 100) {
                showError(titleInput, titleError, 'Course title cannot exceed 100 characters.');
                return false;
            }
            if (!titleRegex.test(title)) {
                showError(titleInput, titleError, 'Title can only contain letters, numbers, spaces, and basic punctuation.');
                return false;
            }
            
            hideError(titleInput, titleError);
            return true;
        }

        // Description validation
        function validateDescription() {
            const desc = descriptionInput.value.trim();
            
            if (desc === '') {
                showError(descriptionInput, descriptionError, 'Course description is required.');
                return false;
            }
            if (desc.length < 20) {
                showError(descriptionInput, descriptionError, 'Description must be at least 20 characters long.');
                return false;
            }
            if (desc.length > 1000) {
                showError(descriptionInput, descriptionError, 'Description cannot exceed 1000 characters.');
                return false;
            }
            
            hideError(descriptionInput, descriptionError);
            return true;
        }

        // Price validation
        function validatePrice() {
            const price = parseFloat(priceInput.value);
            
            if (isNaN(price) || priceInput.value.trim() === '') {
                showError(priceInput, priceError, 'Price is required.');
                return false;
            }
            if (price <= 0) {
                showError(priceInput, priceError, 'Price must be greater than 0.');
                return false;
            }
            if (price > 100000) {
                showError(priceInput, priceError, 'Price cannot exceed ₹100,000.');
                return false;
            }
            
            hideError(priceInput, priceError);
            return true;
        }

        // Duration validation
        function validateDuration() {
            const duration = durationInput.value.trim();
            
            if (duration === '') {
                showError(durationInput, durationError, 'Duration is required.');
                return false;
            }
            if (!durationRegex.test(duration)) {
                showError(durationInput, durationError, 'Duration can only contain letters, numbers, and spaces.');
                return false;
            }
            if (duration.length < 2 || duration.length > 50) {
                showError(durationInput, durationError, 'Duration must be 2–50 characters long.');
                return false;
            }
            
            hideError(durationInput, durationError);
            return true;
        }

        // Helper functions
        function showError(input, errorElement, message) {
            errorElement.style.display = 'block';
            errorElement.textContent = message;
            input.classList.add('is-invalid');
        }

        function hideError(input, errorElement) {
            errorElement.style.display = 'none';
            errorElement.textContent = '';
            input.classList.remove('is-invalid');
        }
    });
</script>
@endsection