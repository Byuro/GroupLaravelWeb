@extends('layouts.app')

@section('title', 'Faculty & Staff')

@section('content')
<style>
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
    }
    .faculty-container {
        max-width: 1000px;
        margin: auto;
        padding: 20px;
    }
    .faculty-list {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .faculty-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        transition: background 0.3s ease, transform 0.2s ease;
        border-radius: 8px;
    }
    .faculty-item:last-child {
        border-bottom: none;
    }
    .faculty-item:hover {
        background-color: #ffefef;
        transform: translateX(10px);
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
    }
    .faculty-item img {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        border: 3px solid #c40b0b; /* Red outline */
        margin-right: 18px;
        object-fit: cover;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .faculty-item:hover img {
        transform: scale(1.1);
        border-color: #ff4d4d; /* Brighter red on hover */
    }
    .faculty-info h5 {
        font-size: 18px;
        margin: 0;
        font-weight: bold;
        color: #222;
    }
    .faculty-info p {
        margin: 2px 0 0;
        font-size: 14px;
        color: #555;
    }
    .section-title {
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        color: #c40b0b; /* Red title */
        margin-bottom: 25px;
        position: relative;
    }
    .section-title::after {
        content: "";
        width: 70px;
        height: 3px;
        background: #c40b0b;
        display: block;
        margin: 10px auto 0;
    }
</style>

<div class="faculty-container">
    <h2 class="section-title">Faculty & Staff</h2>
    <div class="faculty-list">
        @foreach($members as $member)
            <div class="faculty-item">
                <img src="{{ $member->image ? asset('storage/' . $member->image) : 'https://via.placeholder.com/65' }}" alt="{{ $member->name }}">
                <div class="faculty-info">
                    <h5>{{ $member->name }}</h5>
                    <p>Department: {{ ucfirst($member->department) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
