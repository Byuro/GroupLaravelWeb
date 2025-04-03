@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
       
        <div class="card">
            <div class="card-body">
                
                <h1 class="mb-4 text-center" style="color: #1025c3;">{{ $newsItem->title }}</h1>

                <p class="text-center"><strong>Date:</strong> {{ \Carbon\Carbon::parse($newsItem->date)->format('M d, Y') }}</p>

                <p class="text-center">
                    <strong>Organized:</strong> 
                    @if ($newsItem->program_head)
                        {{ $newsItem->programHead->name }}
                    @else
                        Not assigned
                    @endif
                </p>

                @if ($newsItem->image)
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                    </div>
                @endif

                <p class="lead mb-4 text-center"> {{ $newsItem->description }}</p>

                <div class="text-center">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
