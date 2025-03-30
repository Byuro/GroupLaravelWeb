<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Member</h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form id="editForm" action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $member->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="department" required>
                    @php
                        $departments = [
                            'College Administrator', 'Director for Instruction', 'Dean of BSHM', 'Dean of BEED',
                            'Director for Administration', 'Program Director-TVET', 'Program Coordinator-IICT',
                            'SHS Coordinator', 'HR Coordinator', 'Registrar Staff', 'Payroll In-charge',
                            'School Registrar', 'TECHVOC Staff', 'Library Director', 'School Cashier',
                            'Acctg. Director', 'Assessment Center Processing Officer', 'EIM Trainer',
                            'Instructor - PE', 'Instructor - BSED Mathematics', 'Instructor - English',
                            'Instructor-BioScience', 'Clinic In-Charge', 'Instructor - Science',
                            'Instructor-BSED FILIPINO', 'Instructor- ENGLISH', 'Instructor-MATHEMATICS',
                            'OSA Coordinator', 'Instructor-BSBA', 'Instructor- IT', 'Scholarship Coordinator',
                            'Instructor-BSHM', 'SHS Adviser'
                        ];
                    @endphp
                    @foreach($departments as $dept)
                        <option value="{{ $dept }}" {{ $member->department == $dept ? 'selected' : '' }}>{{ $dept }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($member->image)
                    <img src="{{ asset('storage/' . $member->image) }}" alt="Profile Image" class="mt-2" style="width: 150px; height: 150px; object-fit: cover;">
                    <p class="mt-1">Current Profile Picture</p>
                @endif
            </div>

            <div class="d-flex justify-content-between">
                <button type="button" id="submitBtn" class="btn btn-primary">Update Member</button>
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const submitBtn = document.getElementById('submitBtn');
        const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        const confirmUpdate = document.getElementById('confirmUpdate');

        submitBtn.addEventListener('click', function() {
            document.getElementById('reviewName').textContent = document.getElementById('name').value;
            document.getElementById('reviewDepartment').textContent = document.getElementById('department').value;
            confirmationModal.show();
        });

        confirmUpdate.addEventListener('click', function() {
            document.getElementById('editForm').submit();
        });
    </script>
</body>
</html>
