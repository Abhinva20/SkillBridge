@extends('student.layout')

@section('content')
<div class="container">
    <h2>Find Courses</h2>

    {{-- Search Form --}}
    <form action="{{ route('student.find.courses') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search by course or teacher" value="{{ request('q') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <div class="row">
        @forelse($courses as $course)
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <p><strong>Teacher:</strong> {{ $course->teacher->name }}</p>
                        <p><strong>Price:</strong> ₹{{ $course->price }}</p>
                        <p><strong>Duration:</strong> {{ $course->duration }}</p>
                        <a href="#" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No courses found.</p>
        @endforelse
    </div>
</div>
@endsection
