@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add New Member</h2>
        <p class="lead">Please fill out the details of the new member.</p>

        <!-- Display error message if the name already exists -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form to Add Member -->
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Full Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                       placeholder="Enter full name" value="{{ old('name') }}" required>
            </div>

            <!-- Department Selection -->
            <div class="mb-3" id="departmentField">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="faculty" {{ old('department') == 'faculty' ? 'selected' : '' }}>Faculty</option>
                    <option value="staff" {{ old('department') == 'staff' ? 'selected' : '' }}>Staff</option>
                    <option value="management" {{ old('department') == 'management' ? 'selected' : '' }}>Management Staff</option>
                </select>
            </div>

            <!-- Profile Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Add Member</button>
        </form>
    </div>
@endsection
