<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Latest Bootstrap CSS (v5.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* Sidebar Styles */
        .sidebar {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            color: black; /* Change text color to black */
            height: 100vh;
            padding-top: 30px;
            position: fixed;
            top: 0;
            left: 0;
            width: 60px; /* Start with collapsed width */
            z-index: 1000;
            box-shadow: 2px 0px 15px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
            backdrop-filter: blur(10px); /* Apply the blur effect */
            overflow: hidden;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
        }

        .sidebar-header h2 {
            font-size: 24px;
            color: black;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar:hover {
            width: 250px; /* Expand width when hovered */
        }

        .sidebar:hover .sidebar-header h2 {
            opacity: 1; /* Show Admin Panel title when hovered */
        }

        .nav-item {
            font-size: 18px;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            text-decoration: none; /* Remove underline */
            color: black; /* Text color */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-item i {
            margin-right: 10px;
            font-size: 20px;
            transition: margin-right 0.3s ease;
        }

        .nav-item span {
            display: none; /* Hide title initially */
            transition: opacity 0.3s ease;
        }

        .sidebar:hover .nav-item span {
            display: inline-block;
        }

        .sidebar:hover .nav-item i {
            margin-right: 15px; /* Increase margin when hovered */
        }

        .nav-item:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .nav-item.active {
            background-color: #0056b3;
            color: white;
            font-weight: bold;
        }

        /* Sidebar footer styles */
        .sidebar-footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .logout-container form {
            display: inline;
        }

        .logout-container button {
            background: none;
            border: none;
            color: #333;
            font-size: 18px;
        }

        .logout-container button:hover {
            color: #ff5c5c;
        }

        /* Collapsible Sidebar (Mobile responsive) */
        @media (max-width: 767px) {
            .sidebar {
                width: 60px; /* Collapsed by default on mobile */
            }

            .sidebar .nav-item {
                text-align: center;
                padding: 10px;
            }

            .sidebar:hover {
                width: 250px; /* Expand on hover for mobile */
            }

            .sidebar .nav-item span {
                display: none;
            }

            .sidebar:hover .nav-item span {
                display: inline-block; /* Show titles on hover */
            }

            .sidebar:hover .nav-item i {
                margin-right: 15px; /* Adjust icon spacing */
            }
        }

        /* Content Area */
        .content {
            margin-left: 270px;
            padding: 30px;
            background-color: #f9f9f9;
            min-height: 100vh;
        }

        .card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            right: 15px;
            top: 15px;
        }

        /* Card Title */
        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* More vibrant alert styles */
        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Sidebar (Left Navbar) -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <nav class="nav flex-column">
            <!-- Dashboard link -->
            <a href="{{ route('admin.dashboard') }}" class="nav-item dashboard">
                <i class="bi bi-house-door"></i> <span class="nav-link">Dashboard</span>
            </a>
            <!-- News link -->
            <a href="{{ route('admin.news.index') }}" class="nav-item">
                <i class="bi bi-newspaper"></i> <span class="nav-link">All News</span>
            </a>
            <!-- Faculty & Staff link updated to Members route -->
            <a href="{{ route('admin.members.index') }}" class="nav-item faculty">
                <i class="bi bi-person-badge"></i> <span class="nav-link">Faculty & Staff</span>
            </a>
            <!-- Clubs link -->
            <a href="{{ route('admin.clubs') }}" class="nav-item clubs">
                <i class="bi bi-people"></i> <span class="nav-link">Clubs</span>
            </a>
        </nav>

        <!-- Logout Form Positioned at the Bottom -->
        <div class="sidebar-footer">
            <div class="logout-container">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Content Area -->
    <div class="content">
        <div class="container mt-5">
            <!-- Dashboard Title -->
            <h1 class="my-4 text-center text-primary">Admin Dashboard</h1>

            <!-- News Items Section -->
            <h2>News & Events</h2>
            <div class="row mb-4">
                @foreach($newsItems as $news) <!-- Loop through all news items -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <!-- Image display -->
                            <img src="{{ $news->image ? asset('images/' . $news->image) : 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $news->title }}">

                            <div class="card-body">
                                <h5 class="card-title">{{ $news->title }}</h5>
                                <p class="card-text">{{ \Str::limit($news->description, 100) }}</p>
                                <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($news->date)->format('M d, Y') }}</small></p>
                                <a href="{{ route('admin.news.show', $news->id) }}" class="btn btn-primary btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Members List Section -->
            <h2>Members List</h2>
            <div class="row mb-4">
                @foreach($members as $member) <!-- Loop through all members -->
                    <div class="col-md-4 mb-4">
                        <div class="card d-flex flex-row">
                            <!-- Image display, rounded -->
                            <img src="{{ $member->image ? asset('storage/' . $member->image) : 'https://via.placeholder.com/150' }}" 
                                class="card-img-left rounded-circle" alt="{{ $member->name }}" style="width: 150px; height: 150px; object-fit: cover;">

                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title">{{ $member->name }}</h5>
                                <p class="card-text">Department: {{ ucfirst($member->department) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Latest Bootstrap JS (v5.3) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
