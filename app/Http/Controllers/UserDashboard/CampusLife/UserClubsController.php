<?php

// In app/Http/Controllers/UserDashboard/CampusLife/UserClubsController.php
namespace App\Http\Controllers\UserDashboard\CampusLife;

use App\Http\Controllers\Controller;
use App\Models\Club;

class UserClubsController extends Controller
{
    public function index()
    {
        $clubs = Club::all(); // Fetch all clubs from the database
        return view('userdashboard.campuslife.userclubs', compact('clubs'));
    }
}

