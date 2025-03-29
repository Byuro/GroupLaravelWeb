@extends('layouts.admin')

@section('content')
    <h1>{{ $newsItem->title }}</h1>
    <p>{{ $newsItem->description }}</p>
    <p><strong>Date:</strong> {{ $newsItem->date }}</p>

    @if($newsItem->image)
        <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" width="300px">
    @endif

    <a href="{{ route('admin.news') }}">Back to News List</a>
@endsection
