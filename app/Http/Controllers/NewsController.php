<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Import the News model

class NewsController extends Controller
{
    public function index()
    {
        $newsItems = News::all(); // Fetch all news from the database
        return view('UserDashboard.news', compact('newsItems'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id); // Fetch a single news item by ID
        return view('UserDashboard.news_show', compact('newsItem'));
    }
}
