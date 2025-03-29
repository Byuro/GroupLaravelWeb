<?php

namespace App\Http\Controllers;

use App\Models\News;   // Ensure this is present
use App\Models\Member; // Add the Member model
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch news items and members
        $newsItems = News::all(); // Assuming you have a News model
        $members = Member::all();  // Assuming you have a Member model

        // Pass the news items and members to the view
        return view('admin.dashboard', compact('newsItems', 'members'));
    }
}
