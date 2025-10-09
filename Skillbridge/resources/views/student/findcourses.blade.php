@extends('student.layout')

@section('content')
<div class="courses-container">
    <div class="page-header">
        <h1>Find Courses</h1>
        <p>Discover courses from amazing teachers</p>
    </div>

    {{-- Search Form --}}
    <div class="search-section">
        <form action="{{ route('student.find.courses') }}" method="GET">
            <div class="search-bar">
                <input 
                    type="text" 
                    name="q" 
                    class="search-input" 
                    placeholder="Search by course name or teacher..." 
                    value="{{ request('q') }}"
                >
                <button class="search-btn" type="submit">
                    🔍 Search
                </button>
            </div>
        </form>
    </div>

    {{-- Courses Grid --}}
    <div class="courses-grid">
        @forelse($courses as $course)
            <div class="course-card">
                <div class="course-header">
                    <h3 class="course-title">{{ $course->title }}</h3>
                    <span class="course-price">₹{{ $course->price }}</span>
                </div>
                
                <p class="course-description">{{ $course->description }}</p>
                
                <div class="course-meta">
                    <div class="meta-item">
                        <span class="meta-icon">👨‍🏫</span>
                        <span>{{ $course->teacher->name }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-icon">⏱️</span>
                        <span>{{ $course->duration }}</span>
                    </div>
                </div>
                
                <a href="{{ route('student.payment', $course->id) }}" class="enroll-btn">Enroll Now</a>
            </div>
        @empty
            <div class="empty-state">
                <div class="empty-icon">📚</div>
                <h3>No courses found</h3>
                <p>Try adjusting your search or check back later for new courses</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    .courses-container {
        max-width: 1200px;
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

    /* Search Section */
    .search-section {
        margin-bottom: 2.5rem;
    }

    .search-bar {
        display: flex;
        gap: 0.75rem;
        max-width: 600px;
    }

    .search-input {
        flex: 1;
        padding: 0.875rem 1.25rem;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        font-size: 0.95rem;
        transition: all 0.2s ease;
    }

    .search-input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .search-btn {
        padding: 0.875rem 1.75rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        white-space: nowrap;
    }

    .search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }

    /* Courses Grid */
    .courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 1.5rem;
    }

    .course-card {
        background: white;
        border-radius: 12px;
        padding: 1.75rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        border-color: #667eea;
    }

    .course-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .course-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin: 0;
        flex: 1;
    }

    .course-price {
        background: #f0fdf4;
        color: #16a34a;
        padding: 0.5rem 0.875rem;
        border-radius: 8px;
        font-weight: 700;
        font-size: 1.1rem;
        white-space: nowrap;
    }

    .course-description {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.25rem;
        flex-grow: 1;
    }

    .course-meta {
        display: flex;
        gap: 1.5rem;
        margin-bottom: 1.25rem;
        padding-top: 1rem;
        border-top: 1px solid #e2e8f0;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        font-size: 0.9rem;
    }

    .meta-icon {
        font-size: 1.1rem;
    }

    .enroll-btn {
        display: block;
        text-align: center;
        padding: 0.875rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .enroll-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        color: white;
    }

    /* Empty State */
    .empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
    }

    .empty-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
    }

    .empty-state h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .empty-state p {
        color: #64748b;
        font-size: 1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 1.5rem;
        }

        .search-bar {
            flex-direction: column;
        }

        .courses-grid {
            grid-template-columns: 1fr;
        }

        .course-header {
            flex-direction: column;
            align-items: start;
        }

        .course-meta {
            flex-direction: column;
            gap: 0.75rem;
        }
    }
</style>
@endsection