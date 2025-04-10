@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <!-- Home Button -->
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mb-4">
            <i class="bi bi-house-door"></i> Home
        </a>

        <!-- Title Section -->
        <h1 class="my-4 text-center text-primary">Add News & Event</h1>

        <!-- Display any validation errors or success messages -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops! Something went wrong:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- News & Event Form -->
        <div class="card shadow-lg p-4 mb-4">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter event title" value="{{ old('title') }}" required>
                </div>

                <!-- Description -->
                <div class="form-group mt-3">
                    <label for="description" class="font-weight-bold">Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Enter event description" rows="5" required>{{ old('description') }}</textarea>
                </div>

                <!-- Date -->
                <div class="form-group mt-3">
                    <label for="date" class="font-weight-bold">Event Date</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                </div>

                <!-- Image Upload Field -->
                <div class="form-group mt-3">
                    <label for="image" class="font-weight-bold">Event Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>

                <!-- Program Head Dropdown (Optional) -->
                <div class="form-group mt-3">
                    <label for="program_head" class="font-weight-bold">Program Organizer</label>
                    <select name="program_head" id="program_head" class="form-control">
                        @if($members->isEmpty())
                            <option value="" disabled selected>No program organizer added, please add Faculty and Staff</option>
                        @else
                            <option value="" selected>-- Select Program Organizer --</option>
                            @foreach($members as $member)
                                <option value="{{ $member->id }}" {{ old('program_head') == $member->id ? 'selected' : '' }}>
                                    {{ $member->name }} - {{ ucfirst($member->department) }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group mt-3 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Save</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-lg">Cancel</a>
                </div>
            </form>
        </div>

        <hr class="my-4">

                <!-- News List Section -->
        <h2 class="my-4 text-center text-primary">News List</h2>

        <!-- Display the list of news items -->
        @if($newsItems->isEmpty())
            <p class="text-center">No news available.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Title</th>
                            <th class="text-center">Event Date</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Organized</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsItems as $news)
                            <tr>
                                <!-- Title -->
                                <td class="text-center">{{ $news->title }}</td>

                                <!-- Event Date -->
                                <td class="text-center">
                                    <span class="badge bg-info text-light">{{ \Carbon\Carbon::parse($news->date)->format('M d, Y') }}</span>
                                </td>

                                <!-- Image -->
                                <td class="text-center">
                                    @if($news->image)
                                        <img src="{{ asset('images/' . $news->image) }}" alt="{{ $news->title }}" class="img-thumbnail" width="100">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>

                                <!-- Program Head -->
                                <!-- In your index.blade.php view (News List) -->
                                <td class="text-center">
                                    @if($news->program_head)
                                        <span class="badge bg-secondary text-light">{{ $news->programHead->name }}</span>
                                    @else
                                        <span>No Program Head</span>
                                    @endif
                                </td>
                                                                                

                                <!-- Action Buttons -->
                                <td class="text-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this news?');">
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
        @endif
    </div>
@endsection
