@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add New Member</h2>
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="faculty">Faculty</option>
                    <option value="staff">Staff</option>
                    <option value="management">Management Staff</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-success">Add Member</button>
        </form>
    </div>
@endsection
