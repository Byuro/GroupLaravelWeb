<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
        Aces Tagum College
        @show
    </title>


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

    @include('nav')

    <div>
        @yield('content')

    </div>

    <footer style="background-color: #0073ff; color: white; padding: 10px 0; font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="row">
                <!-- Left Side (Logo and Social Media) -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/ACES LOGO HD.png') }}" alt="ATCI Logo"
                            style="width: 50px; margin-right: 10px;">
                        <span style="font-size: 24px; font-weight: bold;">Aces Tagum College, Inc.</span>
                    </div>
                    <p style="margin-top: 10px;">© 2023 Aces Tagum College. All rights reserved.</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/atciofficialpage" class="text-white me-3" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Right Side (Links and Certifications) -->
                <div class="col-md-4">
                    <h5 style="font-weight: bold;">Learn More</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="{{ route('storyatci') }}" class="text-white" style="font-weight: 400;">The Story of
                                ATCI</a></li>
                        <li><a href="https://www.facebook.com/atciofficialpage" class="text-white"
                                style="font-weight: 400;">ATCI Facebook Page</a></li>
                        <li><a href="/privacy-policy" class="text-white" style="font-weight: 400;">Privacy Policy and
                                T&C</a></li>
                    </ul>


                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>