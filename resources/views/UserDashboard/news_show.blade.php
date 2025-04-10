@extends('layouts.app')

@section('title', 'News & Events')

@section('content')
<style>
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
    }
    .news-container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
    }
    .news-card {
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .news-title {
        font-size: 26px;
        font-weight: bold;
        color: #006BFF; /* Blue color */
        margin-bottom: 12px;
    }
    .news-description {
        font-size: 16px;
        color: #555;
        margin-bottom: 15px;
    }
    .news-meta {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
    }
    .news-image {
        max-width: 100%;
        height: auto;
        max-height: 450px;
        object-fit: contain; 
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .btn-back {
        background: #006BFF;
        color: white;
        padding: 10px 24px;
        border-radius: 24px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        transition: background 0.3s ease;
    }
    .btn-back:hover {
        background: #004bb5;
    }
</style>

<div class="news-container">
    <div class="news-card">
       
    <h1 class="news-title">{{ $newsItem->title }}</h1>
    <p class="news-meta"><strong>Date:</strong> {{ \Carbon\Carbon::parse($newsItem->date)->format('M d, Y') }}</p>
    <p class="news-meta"><strong>Organized:</strong> {{ $newsItem->program_head ? $newsItem->programHead->name : 'Not assigned' }}</p>
        @if ($newsItem->image)
            <img src="{{ asset('images/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="news-image">
        @endif

       
        <p class="news-description">{{ $newsItem->description }}</p>
      

        <a href="{{ route('news.index') }}" class="btn btn-back">Back to News</a>
    </div>
</div>
@endsection
