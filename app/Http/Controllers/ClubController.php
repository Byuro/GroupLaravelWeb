<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Member;  // Import the Member model

class ClubController extends Controller
{
    // Display a listing of the clubs
    public function index()
    {
        // Eager load the 'coordinator' relationship to reduce the number of queries
        $clubs = Club::with('coordinator')->get();  // Retrieve all clubs and their coordinators from the database.

        // Pass the clubs data to the 'admin.clubs.index' view
        return view('admin.clubs.index', compact('clubs'));  
    }

    // Show the form for creating a new club
    public function create()
    {
        // Fetch all members (or filter if needed)
        $members = Member::all();  // Fetch all members from the database

        // Return the 'create' view and pass members to it
        return view('admin.clubs.create', compact('members'));  // Pass the members data to the view
    }

    // Store a newly created club in the database
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'club_name' => 'required|string',
            'club_coordinator' => 'nullable|exists:members,id', // Ensure the club_coordinator exists in the members table or is null
            'club_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image type and size
        ]);
    
        // Handle the file upload
        if ($request->hasFile('club_picture')) {
            $filePath = $request->file('club_picture')->store('clubs', 'public');

        }
    
        // Save the club
        $club = new Club();
        $club->club_name = $validated['club_name'];
        $club->club_coordinator = $validated['club_coordinator'] ?? null;
        $club->club_picture = isset($filePath) ? $filePath : null;
        $club->save();
    
        // Redirect to the clubs index page
        return redirect()->route('clubs.index');
    }

    // Show the form for editing the specified club
    public function edit(Club $club)
    {
        // Fetch all members for the dropdown list (for the club coordinator selection)
        $members = Member::all();

        // Return the 'edit' view and pass the club and members to it
        return view('admin.clubs.edit', compact('club', 'members'));
    }

    // Update the specified club in the database
    public function update(Request $request, Club $club)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'club_name' => 'required|string|max:255',
            'club_coordinator' => 'nullable|exists:members,id',  // Ensure the club_coordinator exists in the members table or is null
            'club_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image type and size
        ]);
    
        // Handle the image upload if present
        if ($request->hasFile('club_picture')) {
            // Store the image and get the file path
            $validatedData['club_picture'] = $request->file('club_picture')->store('clubs', 'public');
        }
    
        // Update the club with the validated data
        $club->update($validatedData);
    
        // Redirect back to the clubs index page with a success message
        return redirect()->route('clubs.index')->with('success', 'Club updated successfully!');
    }

    // Remove the specified club from the database
    public function destroy(Club $club)
    {
        // Delete the club from the database
        $club->delete();  

        // Redirect to the clubs index page with a success message
        return redirect()->route('clubs.index')->with('success', 'Club deleted successfully!');
    }
}
