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

        <!-- Review Message after form submission -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Form -->
        <form id="editForm" action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
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

            <!-- Submit and Cancel Buttons -->
            <div class="d-flex justify-content-between">
                <button type="button" id="submitBtn" class="btn btn-primary">Update Member</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to update this member's information?</p>
                    <ul>
                        <li><strong>Name:</strong> <span id="reviewName"></span></li>
                        <li><strong>Department:</strong> <span id="reviewDepartment"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="confirmUpdate">Confirm Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script for Modal Confirmation -->
    <script>
        // Get the form and buttons
        const submitBtn = document.getElementById('submitBtn');
        const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        const confirmUpdate = document.getElementById('confirmUpdate');

        // Populate review information and show confirmation modal
        submitBtn.addEventListener('click', function() {
            const name = document.getElementById('name').value;
            const department = document.getElementById('department').value;
            
            // Set the review information in the modal
            document.getElementById('reviewName').textContent = name;
            document.getElementById('reviewDepartment').textContent = department.charAt(0).toUpperCase() + department.slice(1);

            // Show the confirmation modal
            confirmationModal.show();
        });

        // When the user confirms the update, submit the form
        confirmUpdate.addEventListener('click', function() {
            document.getElementById('editForm').submit();
        });
    </script>
</body>

</html>
