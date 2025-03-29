@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <!-- Home Button to redirect to the Admin Dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Home</a>

        <h2 class="mb-4">Members List</h2>
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary mb-3">Add New Member</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->department }}</td>
                        <td><img src="{{ asset('storage/' . $member->image) }}" alt="Member Image" width="50"></td>
                        <td>
                            <a href="{{ route('admin.members.edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
