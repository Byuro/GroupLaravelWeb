<?php

// app/Http/Controllers/UserDashboard/About/StoryAtciController.php

namespace App\Http\Controllers\UserDashboard\FacultyandStaffController;

use App\Http\Controllers\Controller;

class FacultyStaffController extends Controller
{
    public function index()
    {
    
        return view('userdashboard.facultyandstaff.facultystaff');
    }
}
