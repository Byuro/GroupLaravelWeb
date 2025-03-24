<?php

// app/Http/Controllers/UserDashboard/About/StoryAtciController.php

namespace App\Http\Controllers\UserDashboard\About;

use App\Http\Controllers\Controller;

class StoryAtciController extends Controller
{
    public function index()
    {
        // Return the view located in 'resources/views/userdashboard/about/storyatci.blade.php'
        return view('userdashboard.about.storyatci');
    }
}
