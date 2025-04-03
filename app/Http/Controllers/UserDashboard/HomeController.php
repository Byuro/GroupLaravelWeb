<?php

namespace App\Http\Controllers\UserDashboard;

use App\Models\News;  // Make sure the News model is imported
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 news items (you can modify this query as needed)
        $newsItems = News::latest()->take(3)->get(); // Get the latest 3 news items

        // Return the view and pass the newsItems to it
        return view('userdashboard.home', compact('newsItems'));
    }
}
