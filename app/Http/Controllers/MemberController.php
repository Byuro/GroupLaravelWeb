<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        // Check if name exists before validation
        $nameExists = Member::where('name', $request->name)->exists();
        if ($nameExists) {
            return redirect()->route('admin.members.create') // Redirect to the create page
                ->withInput()
                ->with('error', 'The name "' . $request->name . '" is already taken. Please choose a different name.');
        }
    
        $request->validate([
            'name' => 'required|string|max:255|unique:members,name',
            'department' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.unique' => 'This name already exists. Please choose a different name.'
        ]);
    
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        Member::create([
            'name' => $request->name,
            'department' => $request->department,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.members.index')->with('success', 'Member added successfully.');
    }
    

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.show', compact('member'));
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        
        // Check if name exists and belongs to a different member
        $nameExists = Member::where('name', $request->name)
                          ->where('id', '!=', $id)
                          ->exists();
        if ($nameExists) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'The name "' . $request->name . '" is already taken by another member. Please choose a different name.');
        }
        
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('members', 'name')->ignore($id)
            ],
            'department' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.unique' => 'This name already exists. Please choose a different name.'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($member->image) {
                Storage::disk('public')->delete($member->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $member->image;
        }

        $member->update([
            'name' => $request->name,
            'department' => $request->department,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        // Delete image file
        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully.');
    }
}
