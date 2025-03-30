@extends('layouts.admin') <!-- Assuming you have an admin layout -->

@section('content')
    <div class="container mt-4">
        <!-- News Item Card -->
        <div class="card">
            <div class="card-body">
                <!-- News Title (Centered) -->
                <h1 class="mb-4 text-center">{{ $newsItem->title }}</h1>

                <!-- News Description (Centered) -->
                <p class="lead mb-4 text-center"><strong>Description:</strong> {{ $newsItem->description }}</p>

                <!-- Event Date (Centered) -->
                <p class="text-center"><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($newsItem->date)->format('M d, Y') }}</p>

                <!-- Program Head (Centered) -->
                <p class="text-center">
                    <strong>Program Head:</strong> 
                    @if ($newsItem->program_head)
                        {{ $newsItem->programHead->name }}
                    @else
                        Not assigned
                    @endif
                </p>

                <!-- News Image (Centered) -->
                @if ($newsItem->image)
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                    </div>
                @endif

                <!-- Home Button (Centered) -->
                <div class="text-center">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
