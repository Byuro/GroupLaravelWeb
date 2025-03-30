@extends('layouts.app')

@section('title', 'AcesHymn - News & Events')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach($newsItems as $news)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $news->image ? asset('images/' . $news->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $news->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $news->title }}</h5>
                        <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($news->date)->format('M d, Y') }}</p>
                        
                        @if($news->program_head)
                            <p class="card-text"><strong>Program Head:</strong> {{ $news->programHead->name }}</p>
                        @else
                            <p class="card-text"><strong>Program Head:</strong> Not assigned</p>
                        @endif

                        <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary btn-sm">View More</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection