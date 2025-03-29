@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1 class="my-4 text-center text-primary">Edit News & Event</h1>

        <!-- Review Message after form submission -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Form -->
        <form id="editForm" action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter event title" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="description" class="font-weight-bold">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter event description" rows="5" required>{{ old('description', $news->description) }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="date" class="font-weight-bold">Event Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $news->date) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="image" class="font-weight-bold">Event Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @if ($news->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                @endif
            </div>

            <div class="form-group mt-3 text-center">
                <button type="button" id="submitBtn" class="btn btn-success btn-lg">Update</button>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
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
                    <p>Are you sure you want to update this news & event information?</p>
                    <ul>
                        <li><strong>Title:</strong> <span id="reviewTitle"></span></li>
                        <li><strong>Description:</strong> <span id="reviewDescription"></span></li>
                        <li><strong>Event Date:</strong> <span id="reviewDate"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" id="confirmUpdate">Confirm Update</button>
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
            const title = document.getElementById('title').value;
            const description = document.getElementById('description').value;
            const date = document.getElementById('date').value;
            
            // Set the review information in the modal
            document.getElementById('reviewTitle').textContent = title;
            document.getElementById('reviewDescription').textContent = description;
            document.getElementById('reviewDate').textContent = date;

            // Show the confirmation modal
            confirmationModal.show();
        });

        // When the user confirms the update, submit the form
        confirmUpdate.addEventListener('click', function() {
            document.getElementById('editForm').submit();
        });
    </script>
@endsection
