@extends('layouts.app')

@section('title', 'AcesHymn - News Details')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-4 text-center">{{ $newsItem->title }}</h1>
                <p class="lead mb-4 text-center"><strong>Description:</strong> {{ $newsItem->description }}</p>
                <p class="text-center"><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($newsItem->date)->format('M d, Y') }}</p>

                <p class="text-center">
                    <strong>Program Head:</strong> 
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

                <div class="text-center">
                    <a href="{{ route('news.index') }}" class="btn btn-primary btn-sm">Back to News</a>
                </div>
            </div>
        </div>
    </div>
@endsection
