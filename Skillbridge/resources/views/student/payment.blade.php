@extends('student.layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="payment-header mb-4">
                <h2>Complete Your Enrollment</h2>
                <p class="text-muted">Review course details and proceed with payment</p>
            </div>

            <!-- Payment Card -->
            <div class="payment-card">
                <!-- Course Details Section -->
                <div class="course-details-section">
                    <div class="section-label">Course Information</div>
                    
                    <div class="course-info">
                        <div class="course-main">
                            <h3 class="course-title">{{ $course->title }}</h3>
                            <div class="course-meta">
                                <div class="meta-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span>{{ $course->teacher->name ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($course->description)
                    <div class="course-description">
                        <p>{{ $course->description }}</p>
                    </div>
                    @endif
                </div>

                <!-- Divider -->
                <div class="payment-divider"></div>

                <!-- Price Summary Section -->
                <div class="price-summary-section">
                    <div class="section-label">Payment Summary</div>
                    
                    <div class="price-breakdown">
                        <div class="price-row">
                            <span>Course Price</span>
                            <span class="price-value">₹{{ $course->price ?? '0' }}</span>
                        </div>
                        <div class="price-row">
                            <span>Platform Fee</span>
                            <span class="price-value">₹0</span>
                        </div>
                        <div class="price-row total-row">
                            <span>Total Amount</span>
                            <span class="total-price">₹{{ $course->price ?? '0' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Payment Button -->
                <div class="payment-action">
                    <button class="btn btn-payment">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        Make Payment
                    </button>
                    <p class="payment-note">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        Secure payment powered by SkillBridge
                    </p>
                </div>
            </div>

            <!-- Info Notice -->
            <div class="info-notice mt-3">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <span>You will get instant access to the course after successful payment</span>
            </div>
        </div>
    </div>
</div>

<style>
    .payment-header h2 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    .payment-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        border: 1px solid #e5e7eb;
    }

    .section-label {
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6b7280;
        margin-bottom: 1rem;
    }

    /* Course Details */
    .course-details-section {
        margin-bottom: 1.5rem;
    }

    .course-info {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .course-main {
        flex: 1;
    }

    .course-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }

    .course-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6b7280;
        font-size: 0.95rem;
    }

    .meta-item svg {
        flex-shrink: 0;
    }

    .course-description {
        margin-top: 1rem;
        padding: 1rem;
        background: #f9fafb;
        border-radius: 8px;
        border-left: 3px solid #667eea;
    }

    .course-description p {
        color: #4b5563;
        line-height: 1.6;
        margin: 0;
    }

    /* Divider */
    .payment-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, #e5e7eb, transparent);
        margin: 1.5rem 0;
    }

    /* Price Summary */
    .price-summary-section {
        margin-bottom: 1.5rem;
    }

    .price-breakdown {
        background: #f9fafb;
        padding: 1.25rem;
        border-radius: 8px;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        color: #4b5563;
        font-size: 0.95rem;
    }

    .price-row:not(:last-child) {
        border-bottom: 1px solid #e5e7eb;
    }

    .price-value {
        font-weight: 500;
        color: #1f2937;
    }

    .total-row {
        padding-top: 1rem;
        font-weight: 600;
        font-size: 1.125rem;
        color: #1f2937;
    }

    .total-price {
        font-size: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Payment Action */
    .payment-action {
        text-align: center;
    }

    .btn-payment {
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        color: white;
        font-weight: 600;
        font-size: 1.125rem;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }

    .btn-payment:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }

    .payment-note {
        margin-top: 1rem;
        font-size: 0.875rem;
        color: #6b7280;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .payment-note svg {
        color: #10b981;
    }

    /* Info Notice */
    .info-notice {
        background: #eff6ff;
        border: 1px solid #bfdbfe;
        border-radius: 8px;
        padding: 1rem;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.875rem;
        color: #1e40af;
    }

    .info-notice svg {
        flex-shrink: 0;
        margin-top: 2px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .payment-card {
            padding: 1.5rem;
        }

        .course-title {
            font-size: 1.25rem;
        }

        .payment-header h2 {
            font-size: 1.5rem;
        }
    }
</style>
@endsection