<!DOCTYPE html>
<html>
<head>
    <title>SkillBridge - Connect, Learn, Teach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease;
        }
        
        .hero-section p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.2s both;
        }
        
        .cta-buttons {
            animation: fadeInUp 1s ease 0.4s both;
        }
        
        .cta-buttons .btn {
            padding: 15px 40px;
            font-size: 1.1rem;
            margin: 10px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-light {
            background: white;
            color: #667eea;
            border: none;
        }
        
        .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: #667eea;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        /* Features Section */
        .features-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: #666;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid #e0e0e0;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* How It Works */
        .how-it-works {
            padding: 80px 0;
            background: white;
        }
        
        .step-card {
            text-align: center;
            padding: 30px;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .step-card h4 {
            margin-bottom: 15px;
            color: #333;
        }
        
        .step-card p {
            color: #666;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
            
            .cta-buttons .btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto hero-content">
                <h1>Welcome to SkillBridge</h1>
                <p>Your gateway to knowledge and teaching excellence. Connect with expert instructors, discover engaging courses, and unlock your potential.</p>
                <div class="cta-buttons">
                    <a href="{{ route('login') }}" class="btn btn-light">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose SkillBridge?</h2>
            <p>Everything you need to learn and teach in one platform</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h3>Diverse Courses</h3>
                    <p>Access thousands of courses across multiple disciplines and skill levels.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">👨‍🏫</div>
                    <h3>Expert Teachers</h3>
                    <p>Learn from qualified instructors with real-world experience.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">💼</div>
                    <h3>Live Classes</h3>
                    <p>Attend interactive live sessions and get instant feedback.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">🎓</div>
                    <h3>Flexible Learning</h3>
                    <p>Study at your own pace with on-demand course materials.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">10K+</div>
                    <div class="stat-label">Active Students</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Expert Teachers</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Courses Available</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="how-it-works">
    <div class="container">
        <div class="section-title">
            <h2>How It Works</h2>
            <p>Get started in three simple steps</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Create Your Account</h4>
                    <p>Sign up as a student to learn or as a teacher to share your expertise.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Browse & Choose</h4>
                    <p>Explore our catalog of courses and live classes tailored to your goals.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Start Learning</h4>
                    <p>Enroll in courses, attend classes, and achieve your learning objectives.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Bridge Your Skills?</h2>
        <p>Join thousands of learners and teachers already transforming their future</p>
        <div class="cta-buttons">
            <a href="{{ route('register') }}" class="btn btn-light btn-lg">Get Started Today</a>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>