<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container-fluid">
        
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('storage/ACES LOGO HD.png') }}" alt="ATCI" style="width: 80px; margin-right: 10px;">
            <span style="font-size: 50px; font-weight: bold; color: #0073ff;">ATCI</span>
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                
             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('storyatci') || request()->is('missionvision') || request()->is('corevalues') || request()->is('aceshymn') ? 'active' : '' }}" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('storyatci') }}">The Story of ATCI</a></li>
                        <li><a class="dropdown-item" href="{{ route('missionvision') }}">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="{{ route('corevalues') }}">Core Values</a></li>
                        <li><a class="dropdown-item" href="{{ route('aceshymn') }}">Aces Hymn</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('bsba') || request()->is('bsed') || request()->is('beed') || request()->is('bshm') || request()->is('bsit') || request()->is('shs') ? 'active' : '' }}" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programs & Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programsDropdown">
                        <li><a class="dropdown-item" href="{{ route('bsba') }}">Bachelor of Science in Business Administration</a></li>
                        <li><a class="dropdown-item" href="{{ route('bsed') }}">Bachelor of Science in Secondary Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('beed') }}">Bachelor of Elementary Education</a></li>
                        <li><a class="dropdown-item" href="{{ route('bshm') }}">Bachelor of Science in Hospitality Management</a></li>
                        <li><a class="dropdown-item" href="{{ route('bsit') }}">Bachelor of Science in Information Technology</a></li>
                        <li><a class="dropdown-item" href="{{ route('shs') }}">Senior High School</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('userclubs.index') ? 'active' : '' }}" href="#" id="campusLifeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Campus Life
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="campusLifeDropdown">
                        <li><a class="dropdown-item" href="{{ route('userclubs.index') }}">Student Clubs</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('news') ? 'active' : '' }}" href="/news">News & Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('facultystaff') ? 'active' : '' }}" href="{{ route('facultystaff') }}">Faculty & Staff</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar.fixed-top {
        position: sticky;
        top: 0;
        z-index: 1000; 
    }

    /* Navbar Background Color */
    .navbar.bg-white {
        background-color: white !important; /* White background for navbar */
    }

    /* Active Link Text Color */
    .nav-link.active {
        color: #0073ff !important; /* Change active link text color to blue */
    }

    /* Hover Effect for Navbar Links */
    .nav-link:hover {
        color: #0056b3 !important; /* Darker blue text on hover */
    }
    
    /* Style for dropdown links when active */
    .dropdown-menu .active {
        color: #0073ff !important; /* Active dropdown item text color */
    }
</style>
