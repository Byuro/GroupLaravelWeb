<?php

namespace App\Http\Controllers\UserDashboard\FacultyAndStaffController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member; // Ensure you have imported the correct model

class FacultyStaffController extends Controller
{
    public function index()
    {
        $members = Member::all(); // Fetch all members from the database
        return view('UserDashboard.FacultyandStaff.facultystaff', compact('members'));
    }
}