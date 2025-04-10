@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @parent

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }
        .carousel-indicators button {
            background-color: #fff;
        }
        .btn-category {
            border-radius: 50px;
            padding: 12px 24px;
            width: 180px;
            font-weight: 600;
            transition: background 0.3s ease;
        }
        .btn-category:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .news-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .news-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        
        .btn-outline-primary {
            border: 2px solid #007bff;
            color: #007bff;
            background-color: transparent;
        }
        .btn-outline-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-body {
            flex-grow: 1;
        }
        .card-title {
            font-size: 1.1rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .card-text {
            font-size: 0.9rem;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @for ($i = 0; $i < 10; $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @for ($i = 1; $i <= 10; $i++)
                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                    <img src="{{ asset('storage/aces'.$i.'.jpg') }}" class="d-block w-100" alt="Slide {{ $i }}">
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- category buttons -->
    <div class="container-fluid text-center bg-primary py-3 mt-4">
    <div class="d-flex justify-content-center flex-wrap">
        <a href="{{ route('shs') }}" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">SHSD</a>
        <a href="{{ route('beed') }}" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">ITE-BEED</a>
        <a href="{{ route('bsed') }}" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">ITE-BSED</a>
        <a href="{{ route('bshm') }}#row iict-section" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IHMTVE</a>
        <a href="{{ route('bsit') }}" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IICT</a>
        <a href="{{ route('bsba') }}" class="btn btn-outline-light mx-2 my-2" style="border-radius: 50px; padding: 10px 30px; width: 200px; font-family: 'Poppins', sans-serif;">IBA</a>
    </div>

    </div>

   
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2>Empowering Future-Ready Learners at Aces Tagum College</h2>
                <p>Aces Tagum College, Inc. is dedicated to providing high-quality, accessible education, equipping students with skills for the future. We foster critical thinking, creativity, and responsibility to shape individuals who contribute positively to society.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('storage/acesfront.jpg') }}" class="news-image" alt="Aces Tagum College">
            </div>
        </div>
    </div>

    <!-- university News section -->
    <div class="container my-5 news-section">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2>ATCI News and Events</h2>
            </div>
        </div>
        <div class="row">
            @foreach($newsItems as $news)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $news->image ? asset('images/' . $news->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $news->title }}">
                        <div class="card-body">
                            <h5 class="card-title news-card-title">{{ $news->title }}</h5>
                            <p class="card-text news-card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($news->date)->format('M d, Y') }}</p>
                            @if($news->programHead)
                                <p class="card-text news-card-text"><strong>Program Head:</strong> {{ $news->programHead->name }}</p>
                            @else
                                <p class="card-text news-card-text"><strong>Program Head:</strong> Not assigned</p>
                            @endif
                            
                            <div class="d-flex justify-content-center mt-auto">
                                <a href="{{ route('news.show', $news->id) }}" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
