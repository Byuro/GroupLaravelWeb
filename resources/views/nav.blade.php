
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
                <a class="nav-link" href="{{ route('facultystaff') }}">Faculty & Staff</a></li>
            </li>
        </ul>
    </div>
</nav>