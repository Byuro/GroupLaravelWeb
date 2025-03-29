<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Dashboard method - Fetches all news items for the dashboard
    public function dashboard()
    {
        // Fetch all news items, ordered by most recent first
        $newsItems = News::latest()->get();

        // Return the view with the fetched news items
        return view('admin.dashboard', compact('newsItems'));
    }

    // Index method - Displays all news items
    public function index()
    {
        // Fetch all news items, ordered by most recent first
        $newsItems = News::latest()->get();

        // Return the view with the fetched news items
        return view('admin.news.index', compact('newsItems'));
    }

    // Create method - Returns view for creating a news item
    public function create()
    {
        return view('admin.news.create');
    }

    // Store method - Handles storing a new news item
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048', // Added max file size
        ]);

        // Create a new news item and populate it with validated data
        $news = new News();
        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->date = $validated['date'];

        // Check if there's an uploaded image, and store it
        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images', 'public');
        }

        // Save the news item
        $news->save();

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item created successfully.');
    }

    // Show method - Displays a specific news item
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    // Edit method - Returns view for editing a specific news item
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Update method - Handles updating an existing news item
    public function update(Request $request, News $news)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048', // Added max file size
        ]);

        // Update the news item with validated data
        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->date = $validated['date'];

        // Check if there's an uploaded image, and store it
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $news->image = $request->file('image')->store('news_images', 'public');
        }

        // Save the updated news item
        $news->save();

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully.');
    }

    // Destroy method - Deletes a specific news item
    public function destroy(News $news)
    {
        // Delete the image associated with the news item if it exists
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        // Delete the specific news item
        $news->delete();

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item deleted successfully.');
    }
}
