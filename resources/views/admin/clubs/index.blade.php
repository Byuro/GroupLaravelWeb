@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <!-- Home Button to redirect to the Admin Dashboard -->
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Home</a>

    <h2>Clubs</h2>
    <a href="{{ route('clubs.create') }}" class="btn btn-primary">Add Club</a>
    
    @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Club Coordinator</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
                <tr>
                    <td>{{ $club->club_name }}</td>
                    <td>
                        @if($club->coordinator) <!-- Check if coordinator exists -->
                            {{ $club->coordinator->name }} <!-- Display coordinator name -->
                        @else
                            No Coordinator Assigned
                        @endif
                    </td>
                    <td>
                        @if($club->club_picture)
                        <img src="{{ asset('storage/'.$club->club_picture) }}" width="100">


                        @else
                            No Picture Available
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- JavaScript for Delete Confirmation -->
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this club?");
    }
</script>
@endsection
