<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Edit Member</h1>

        <!-- Edit Form -->
        <form action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Ensure it's a PUT request -->

            <!-- Member Information Fields -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $member->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="faculty" {{ $member->department == 'faculty' ? 'selected' : '' }}>Faculty</option>
                    <option value="staff" {{ $member->department == 'staff' ? 'selected' : '' }}>Staff</option>
                    <option value="management" {{ $member->department == 'management' ? 'selected' : '' }}>Management Staff</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($member->image)
                    <img src="{{ asset('storage/' . $member->image) }}" alt="Profile Image" class="mt-2" style="width: 150px; height: 150px; object-fit: cover;">
                    <p class="mt-1">Current Profile Picture</p>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Member</button>
        </form>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
