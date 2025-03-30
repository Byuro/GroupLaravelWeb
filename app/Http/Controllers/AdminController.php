<?php

namespace App\Http\Controllers;

use App\Models\News;   // Ensure this is present
use App\Models\Member; // Add the Member model
use App\Models\Club;   // Add the Club model (Make sure it's imported)
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch news items, members, and clubs from the database
        $newsItems = News::all();  // Assuming you have a News model
        $members = Member::all();  // Assuming you have a Member model
        $clubs = Club::all();      // Assuming you have a Club model

        // Pass the news items, members, and clubs to the view
        return view('admin.dashboard', compact('newsItems', 'members', 'clubs'));
    }
}
