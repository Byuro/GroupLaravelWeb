@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Add Club</h2>
    <form action="{{ route('clubs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="club_name" class="form-label">Club Name</label>
            <input type="text" class="form-control" id="club_name" name="club_name" required>
        </div>
        <div class="mb-3">
            <label for="club_manager" class="form-label">Club Manager</label>
            <input type="text" class="form-control" id="club_manager" name="club_manager" required>
        </div>
        <div class="mb-3">
            <label for="club_picture" class="form-label">Club Picture</label>
            <input type="file" class="form-control" id="club_picture" name="club_picture" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Club</button>
    </form>
</div>
@endsection
