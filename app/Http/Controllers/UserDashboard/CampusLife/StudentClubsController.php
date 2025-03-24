<?php

// app/Http/Controllers/UserDashboard/About/StoryAtciController.php

namespace App\Http\Controllers\UserDashboard\CampusLife;

use App\Http\Controllers\Controller;

class StudentClubsController extends Controller
{
    public function index()
    {
        // Return the view located in 'resources/views/userdashboard/about/storyatci.blade.php'
        return view('userdashboard.campuslife.clubs');
    }
}
