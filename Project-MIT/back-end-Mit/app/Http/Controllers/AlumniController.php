<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnis = Alumni::all();
        return view('content.post.alumin.index', compact('alumnis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.post.alumin.add_or_edit_alumni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $alumni = new Alumni();
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image upload failed: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'No image file was uploaded.');
        }

        $alumni->title = $request->input('title');
        $alumni->description = $request->input('description');
        $alumni->image = $imageName; // Corrected here
        $alumni->save();

        return redirect()->route('alumnis')->with('success', 'Your alumni was created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumnis = Alumni::find($id);
        return view('content.post.alumin.view_alumni', compact('alumnis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumniEdit = Alumni::find($id);
        return view('content.post.alumin.add_or_edit_alumni', compact('alumniEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $alumni = Alumni::find($id);
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image upload failed: ' . $e->getMessage());
            }
        } else {
            $imageName = $alumni->image;
        }

        $alumni->title = $request->input('title');
        $alumni->description = $request->input('description');
        $alumni->image = $imageName;
        $alumni->save();

        return redirect()->route('alumnis')->with('success', 'Your alumni was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $alumnis = Alumni::find($id);
        $alumnis->delete();
        return redirect()->route('alumnis')->with('delete', 'Your alumni was deleted successfully!');
    }
}
