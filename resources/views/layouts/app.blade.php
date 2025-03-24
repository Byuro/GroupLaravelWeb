<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aces Tagum College')</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            background-color: #fff;
            color: black;
        }

        .navbar {
            padding: 5px 50px;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-size: 44px;
            color: #0073ff;
            font-weight: 600;
            text-transform: uppercase;
        }

        .navbar a {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: uppercase;
            color: rgb(0, 0, 0);
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar-toggler {
            border: none;
        }

        .dropdown-menu {
            background-color: #f8f8f8;
            border-radius: 5px;
        }

        .dropdown-item {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: black;
            padding: 10px;
        }

        .dropdown-item:hover {
            background-color: rgb(0, 94, 255);
            color: rgb(0, 0, 0);
        }
    </style>

    @stack('styles')
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Home Link with route() -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('storage/ACES LOGO HD.png') }}" alt="ATCI" style="width: 80px; margin-right: 10px;">
                <span style="font-size: 50px; font-weight: bold; color: #0073ff;">ATCI</span>
            </a>
    
    
        <!-- Navbar Toggle for mobile responsiveness -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <!-- About Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <li><a class="dropdown-item" href="{{ route('storyatci') }}">The Story of ATCI</a></li>
                                <li><a class="dropdown-item" href="{{ route('missionvision') }}">Mission and Vision</a></li>
                                <li><a class="dropdown-item" href="{{ route('corevalues') }}">Core Values</a></li>
                                <li><a class="dropdown-item" href="{{ route('aceshymn') }}">Aces Hymn</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
    
                <!-- Programs & Courses Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programs & Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programsDropdown">
                        <li><a class="dropdown-item" href="{{ route('bsba') }}">Bachelor of Science in Business Administration</a></li>
                        <li><a class="dropdown-item" href="{{ route('bsed') }}">Bachelor of Science in Secondary Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('beed') }}">Bachelor of Elementary Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('bshm') }}">Bachelor of Science in Hotel Management</a></li>
                        <li><a class="dropdown-item" href="{{ route('bsit') }}">Bachelor of Science in Information Technology</a></li>
                        <li><a class="dropdown-item" href="{{ route('shs') }}">Senior High School</a></li>
                    </ul>
                </li>
    
                <!-- Campus Life Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="campusLifeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Campus Life
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="campusLifeDropdown">
                        <li><a class="dropdown-item" href="/clubs">Student Clubs</a></li>
                        <li><a class="dropdown-item" href="/activities">Activities</a></li>
                    </ul>
                </li>
    
                <!-- News & Events Link -->
                <li class="nav-item">
                    <a class="nav-link" href="/news">News & Events</a>
                </li>
    
                <!-- Faculty & Staff Link -->
                <li class="nav-item">
                    <a class="nav-link" href="/faculty">Faculty & Staff</a>
                </li>
            </ul>
        </div>
    </nav>


    <div>
        @yield('content')
    </div>


   <!-- Footer Section -->
<footer style="background-color: #0073ff; color: white; padding: 30px 0; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row">
            <!-- Left Side (Logo and Social Media) -->
            <div class="col-md-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/ACES LOGO HD.png') }}" alt="ATCI Logo" style="width: 50px; margin-right: 10px;">
                    <span style="font-size: 24px; font-weight: bold;">Aces Tagum College, Inc.</span>
                </div>
                <p style="margin-top: 10px;">© 2023 Aces Tagum College. All rights reserved.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/atciofficialpage" class="text-white me-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            
            
            <!-- Right Side (Links and Certifications) -->
            <div class="col-md-4">
                <h5 style="font-weight: bold;">Learn More</h5>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="{{ route('storyatci') }}"class="text-white" style="font-weight: 400;">The Story of ATCI</a></li>
                    <li><a href="https://www.facebook.com/atciofficialpage" class="text-white" style="font-weight: 400;">ATCI Facebook Page</a></li>
                    <li><a href="/privacy-policy" class="text-white" style="font-weight: 400;">Privacy Policy and T&C</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
