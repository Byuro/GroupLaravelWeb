@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Edit Club</h2>
    <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="club_name" class="form-label">Club Name</label>
            <input type="text" class="form-control" id="club_name" name="club_name" value="{{ $club->club_name }}" required>
        </div>
        <div class="mb-3">
            <label for="club_manager" class="form-label">Club Manager</label>
            <input type="text" class="form-control" id="club_manager" name="club_manager" value="{{ $club->club_manager }}" required>
        </div>
        <div class="mb-3">
            <label for="club_picture" class="form-label">Club Picture</label>
            <input type="file" class="form-control" id="club_picture" name="club_picture" accept="image/*">
            <img src="{{ asset('storage/' . $club->club_picture) }}" width="100">
        </div>
        <button type="submit" class="btn btn-success">Update Club</button>
    </form>
</div>
@endsection
