<?php

// app/Http/Controllers/UserDashboard/HomeController.php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('userdashboard.home'); // The view path is now relative to resources/views/userdashboard/home.blade.php
    }
}

