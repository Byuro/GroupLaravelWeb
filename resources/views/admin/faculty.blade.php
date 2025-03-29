@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add New Member</h2>
        <p class="lead">Please fill out the details of the new member.</p>

        <!-- Form to Add Member -->
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Full Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>

            <!-- Department Selection -->
            <div class="mb-3" id="departmentField">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="faculty">Faculty</option>
                    <option value="staff">Staff</option>
                    <option value="management">Management Staff</option>
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

    <!-- JavaScript to handle department selection -->
    <script>
        document.getElementById('department').addEventListener('change', function() {
            var department = this.value;
            var courseField = document.getElementById('courseField');
            var courseInput = document.getElementById('course');

            // Hide course field as it's no longer needed
            courseField.style.display = 'none';
            courseInput.required = false;
        });
    </script>
@endsection
