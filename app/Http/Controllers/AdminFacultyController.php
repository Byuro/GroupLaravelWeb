<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFacultyController extends Controller
{
    public function index()
    {
        // Return the view for managing faculty (update as needed)
        return view('admin.faculty');
    }
}
