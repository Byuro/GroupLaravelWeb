@extends('layouts.app')

@section('title', 'News & Events')

@section('content')
<style>
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
    }
    .news-container {
        max-width: 1100px;
        margin: auto;
        padding: 20px;
    }
    .news-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .news-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
    .news-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .news-card-body {
        padding: 15px;
        text-align: center;
    }
    .news-title {
        font-size: 18px;
        font-weight: bold;
        color: #1025c3; 
    }
    .news-card-text {
        font-size: 14px;
        color: #555;
        margin-top: 5px;
    }
    .news-card a {
        display: inline-block;
        background: #006BFF; /* Blue button */
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 14px;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    .news-card a:hover {
        background: #004bb5; /* Darker blue on hover */
    }
</style>

<div class="news-container">
    <h2 class="text-center mb-4" style="color:rgb(33, 11, 196); font-weight: bold;">News & Events</h2>
    
    <div class="row">
        @foreach($newsItems as $news)
            <div class="col-md-4 mb-4">
                <div class="news-card h-100">
                    <img src="{{ $news->image ? asset('images/' . $news->image) : 'https://via.placeholder.com/300' }}" alt="{{ $news->title }}">
                    <div class="news-card-body">
                        <h1 class="news-title">{{ $news->title }}</h1>
                        <p class="news-card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($news->date)->format('M d, Y') }}</p>
                        
                        <p class="news-card-text">
                            <strong>Organized:</strong> {{ $news->programHead->name ?? 'Not assigned' }}
                        </p>

                        <a href="{{ route('news.show', $news->id) }}">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
