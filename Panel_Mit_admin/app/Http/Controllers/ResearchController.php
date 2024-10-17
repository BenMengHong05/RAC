<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    //
    public function index()
    {
        $researchs = Research::all(); // Fetch all researchs
        return view('content.categories.research.index')->with('researchs', $researchs); // Pass researchs to the view
    }

    // Show the form to create a new research
    public function create()
    {
        return view('content.categories.research.add_or_edit_research');
    }

    // Store a new research
    public function store(Request $request)
{
    $request->validate([
        'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
        'title' => 'required',
        'description' => 'required',
    ]);

    // Handle image upload
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

    // Create new research
    $research = new Research();
    $research->image = $imageName;  // Corrected image assignment
    $research->title = $request->input('title');
    $research->description = $request->input('description');
    $research->save();

    return redirect()->route('researchs')->with('success', 'You added the research successfully.');
}

    public function show($id)
{
    // Find the research by id
    $research = Research::findOrFail($id);
    // Pass the research data to the view
    return view('content.categories.research.view_research')->with('research', $research);
}
public function delete($id)
{
    $research = Research::find($id);

    if (!$research) {
        return redirect()->route('researchs')->with('error', 'research not found.');
    }

    // Remove the research's image from the storage
    $imagePath = public_path('images/' . $research->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);  // Deletes the image from the file system
    }

    // Delete the research record from the database
    $research->delete();

    return redirect()->route('researchs')->with('delete', 'research deleted successfully.');
}
public function edit($id){
    $researchEdit = Research::Find($id);
    return view('content.categories.research.add_or_edit_research', compact('researchEdit'));
}
public function update(Request $request , $id){
    $request->validate([
        'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
        'title' => 'required',
        'description' => 'required',
    ]);
    $research = Research::Find($id);
    if (!$research) {
        return redirect()->route('researchs')->with('error', 'research not found.');
    }
    $research->title = $request->input('title');
    $research->description = $request->input('description');
    if ($request->hasFile('image')) {
        $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);
        $research->image = $imageName;
    }
    $research->save();
    return redirect()->route('researchs')->with('researchs' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = Research::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('title', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $researchs = $query->get(); // Change from $students to $researchs

    // Return the view with the list of researchs
    return view('content.categories.research.index')->with('researchs', $researchs);
}
}
