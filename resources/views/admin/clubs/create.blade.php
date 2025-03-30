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
            <label for="club_coordinator" class="form-label">Club Coordinator</label>
            <select class="form-control" id="club_coordinator" name="club_coordinator">
                <option value="">Select Coordinator</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>  <!-- Assuming Member has a 'name' field -->
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="club_picture" class="form-label">Club Picture</label>
            <input type="file" class="form-control" id="club_picture" name="club_picture" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Add Club</button>
    </form>
</div>
@endsection
