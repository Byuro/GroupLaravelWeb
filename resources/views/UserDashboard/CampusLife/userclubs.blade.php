@extends('layouts.app')

@section('title', 'Clubs')

@section('content')
<style>
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
    }
    .clubs-container {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
    }
    .club-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
        justify-content: center;
    }
    .club-card {
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .club-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background: #006BFF;
        color: white;
    }
    .club-card:hover .club-title, 
    .club-card:hover .club-info {
        color: white;
    }
    .club-number {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 60px;
        color: #EEEEEE;
        font-weight: bold;
        opacity: 0.7;
    }
    .club-title {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-top: 20px;
    }
    .club-info {
        color: #444;
        font-size: 14px;
        margin-top: 8px;
    }
    .club-image {
        margin-top: 16px;
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
        border-radius: 8px;
        transition: transform 0.3s ease;
        background: white;
    }
    .club-card:hover .club-image {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .club-title {
            font-size: 20px;
        }
        .club-info {
            font-size: 12px;
        }
        .club-card {
            padding: 16px;
        }
        .club-image {
            max-height: 180px;
        }
    }
</style>

<div class="clubs-container">
    <h1 class="text-center" style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">List of Clubs</h1>

    <div class="club-grid">
        @foreach ($clubs as $club)
        <div class="club-card">
            <div class="club-number">0{{ $loop->iteration }}</div>
            <h2 class="club-title">{{ $club->club_name }}</h2>
            <p class="club-info"><strong>Club Coordinator:</strong> {{ $club->coordinator->name ?? 'No Coordinator Assigned' }}</p>
            <img src="{{ asset('storage/' . $club->club_picture) }}" alt="{{ $club->club_name }}" class="club-image">
        </div>
        @endforeach
    </div>
</div>
@endsection
