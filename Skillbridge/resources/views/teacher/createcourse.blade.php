@extends('teacher.layout') {{-- Your existing teacher dashboard layout --}}

@section('content')
<div class="container mt-4">
    <h2>Create a New Course</h2>

    {{-- Display success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Display validation errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teacher.course.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Course Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price (₹)</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        <div class="mb-3">
            <label>Duration (e.g. 4 weeks)</label>
            <input type="text" name="duration" class="form-control" value="{{ old('duration') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
</div>
@endsection
