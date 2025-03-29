<?php

namespace App\Http\Controllers;

use App\Models\News;  // Make sure this line is present
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch the news items (you can adjust this according to your actual model)
        $newsItems = News::all(); // Fetching all the news items

        // Pass the news items to the view
        return view('admin.dashboard', compact('newsItems'));
    }
}
