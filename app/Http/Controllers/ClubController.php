<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    // Display a listing of the clubs
    public function index()
    {
        $clubs = Club::all();  // Retrieve all clubs from the database.
        return view('admin.clubs.index', compact('clubs'));  // Pass clubs to the 'admin.clubs.index' view
    }

    // Show the form for creating a new club
    public function create()
    {
        return view('admin.clubs.create');  // Return the create club view
    }

    // Store a newly created club in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'club_name' => 'required|string|max:255',
            'club_manager' => 'required|string|max:255',
            'club_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Optional image upload
        ]);

        // Handle the image upload if present
        if ($request->hasFile('club_picture')) {
            $validatedData['club_picture'] = $request->file('club_picture')->store('clubs', 'public');  // Store the image in 'public' disk under 'clubs' folder
        }

        // Create the club using the validated data
        Club::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('clubs.index')->with('success', 'Club added successfully!');
    }

    // Display the specified club
    public function show(Club $club)
    {
        return view('admin.clubs.show', compact('club'));  // Show the details of the specific club
    }

    // Show the form for editing the specified club
    public function edit(Club $club)
    {
        return view('admin.clubs.edit', compact('club'));  // Return the edit view for the specific club
    }

    // Update the specified club in the database
    public function update(Request $request, Club $club)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'club_name' => 'required|string|max:255',
            'club_manager' => 'required|string|max:255',
            'club_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Optional image upload
        ]);

        // Handle the image upload if present
        if ($request->hasFile('club_picture')) {
            $validatedData['club_picture'] = $request->file('club_picture')->store('clubs', 'public');  // Store the image in 'public' disk under 'clubs' folder
        }

        // Update the club with the validated data
        $club->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('clubs.index')->with('success', 'Club updated successfully!');
    }

    // Remove the specified club from the database
    public function destroy(Club $club)
    {
        $club->delete();  // Delete the club from the database

        // Redirect to the index page with a success message
        return redirect()->route('clubs.index')->with('success', 'Club deleted successfully!');
    }
}
