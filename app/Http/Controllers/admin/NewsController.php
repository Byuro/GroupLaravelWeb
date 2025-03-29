<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News; // Import the News model
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Method to handle the dashboard
    public function dashboard()
    {
        // Retrieve the news items from the database
        $newsItems = News::all(); // You can modify this query to suit your needs

        // Pass the news items to the dashboard view
        return view('admin.dashboard', compact('newsItems')); // Pass newsItems to the view
    }

    // Method to handle the display of news items (this is the 'index' method)
    public function index()
    {
        // Fetch news items from the database
        $newsItems = News::all(); // Alternatively, you can paginate if needed

        // Return the view with the fetched news items
        return view('admin.news.index', compact('newsItems'));
    }

    // Method to display a single news item (show method)
    public function show($id)
    {
        // Find the news item by its ID
        $newsItem = News::findOrFail($id);

        // Return the view with the news item
        return view('admin.news.show', compact('newsItem'));
    }

    // Edit method
    public function edit($id)
    {
        // Retrieve the news item by its ID
        $news = News::findOrFail($id);

        // Return the edit view with the news item data
        return view('admin.news.edit', compact('news'));
    }

    // Method to update a specific news item
    public function update(Request $request, $id)
    {
        // Retrieve the news item by its ID
        $news = News::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // If an image is provided, upload and update it
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->image->extension();

            // Store the image in the 'public/images' directory
            $request->image->move(public_path('images'), $imageName);

            // Add the image name to the validated data
            $validatedData['image'] = $imageName;
        }

        // Update the news item with the validated data
        $news->update($validatedData);

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully.');
    }

    // Method to store a new news item
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image field
        ]);

        // Handle file upload (if any)
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->image->extension();

            // Store the image in the 'public/images' directory
            $request->image->move(public_path('images'), $imageName);

            // Save the image name in the database
            $validatedData['image'] = $imageName;
        }

        // Create the new news item
        News::create($validatedData);

        // Redirect back to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item created successfully.');
    }

    // Method to delete a specific news item
    public function destroy($id)
    {
        // Retrieve the news item by its ID
        $news = News::findOrFail($id);

        // Delete the news item
        $news->delete();

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item deleted successfully.');
    }
}
