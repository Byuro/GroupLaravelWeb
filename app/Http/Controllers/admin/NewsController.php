<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News; // Import the News model
use App\Models\Member; // Import the Member model
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

        // Fetch all members to populate the Program Head dropdown
        $members = Member::all();

        // Return the view with the fetched news items and members
        return view('admin.news.index', compact('newsItems', 'members'));
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

        // Fetch all members to populate the Program Head dropdown
        $members = Member::all();

        // Return the edit view with the news item data and members
        return view('admin.news.edit', compact('news', 'members'));
    }

    // Method to update a specific news item
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'program_head' => 'nullable|exists:members,id', // Validate the program_head field
        ]);

        // Find the news item by ID
        $news = News::findOrFail($id);

        // Update the news item with the validated data
        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        $news->date = $validatedData['date'];
        $news->program_head = $validatedData['program_head']; // Update the program head

        // Handle the image upload, if any
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->image->extension();

            // Store the image in the 'public/images' directory
            $request->image->move(public_path('images'), $imageName);

            // Add the image name to the news data
            $news->image = $imageName;
        }

        // Save the changes to the news item
        $news->save();

        // Redirect to the news index page with a success message
        return redirect()->route('admin.news.index')->with('success', 'News item updated successfully.');
    }

    // Method to store a new news item
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'program_head' => 'nullable|exists:members,id', // Validate the program_head field
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image field
        ]);

        // Create a new news item
        $newsItem = new News();
        $newsItem->title = $validated['title'];
        $newsItem->description = $validated['description'];
        $newsItem->date = $validated['date'];
        $newsItem->program_head = $validated['program_head']; // Save the selected program_head (member id)

        // Handle file upload (if any)
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->image->extension();

            // Store the image in the 'public/images' directory
            $request->image->move(public_path('images'), $imageName);

            // Save the image name in the database
            $newsItem->image = $imageName;
        }

        // Save the news item to the database
        $newsItem->save();

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

    // Method to handle the 'create' view (for adding news)
    public function create()
    {
        // Fetch all members to populate the Program Head dropdown
        $members = Member::all();

        // Return the create view with the members data
        return view('admin.news.create', compact('members'));
    }
}
