@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="my-4 text-center text-primary">Edit News & Event</h1>

        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter event title" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="description" class="font-weight-bold">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter event description" rows="5" required>{{ old('description', $news->description) }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="date" class="font-weight-bold">Event Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $news->date) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="image" class="font-weight-bold">Event Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @if ($news->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                @endif
            </div>

            <div class="form-group mt-3 text-center">
                <button type="submit" class="btn btn-success btn-lg">Update</button>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
            </div>
        </form>
    </div>
@endsection
