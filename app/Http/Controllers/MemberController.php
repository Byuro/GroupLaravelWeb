<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

    // The 'edit' method has been integrated here.
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $member = Member::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($member->image && file_exists(public_path('images/' . $member->image))) {
                unlink(public_path('images/' . $member->image));
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
        if ($member->image && file_exists(public_path('images/' . $member->image))) {
            unlink(public_path('images/' . $member->image));
        }
        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully.');
    }
}
