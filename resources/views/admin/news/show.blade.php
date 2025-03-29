@extends('layouts.admin') <!-- Assuming you have an admin layout -->

@section('content')
    <div class="container mt-4">
        <!-- News Title -->
        <h1 class="mb-4">{{ $newsItem->title }}</h1>

        <!-- News Description -->
        <p class="lead mb-4">{{ $newsItem->description }}</p>

        <!-- News Date -->
        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($newsItem->date)->format('M d, Y') }}</p>

        <!-- News Image (Responsive and Controlled Size) -->
        @if ($newsItem->image)
            <div class="mb-4">
                <img src="{{ asset('images/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
            </div>
        @endif

        <!-- Edit and Delete Buttons (Positioned Together) -->
        <div class="d-flex justify-content-start mb-4">
            <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-primary me-2">
                <i class="fas fa-edit"></i> Edit
            </a>

            <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news item?');">
                    <i class="fas fa-trash-alt"></i> Delete
                </button>
            </form>
        </div>
    </div>
@endsection
