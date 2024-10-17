<?php

namespace App\Http\Controllers;

use App\Models\Admissions_Aid;
use Illuminate\Http\Request;

class Admissions_AidController extends Controller
{
    //
    public function index()
    {
        $admissions_aids = Admissions_Aid::all(); // Fetch all admissions_aids
        return view('content.categories.admissions_aid.index')->with('admissions_aids', $admissions_aids); // Pass admissions_aids to the view
    }

    // Show the form to create a new admissions_aid
    public function create()
    {
        return view('content.categories.admissions_aid.add_or_edit_admissions_aid');
    }

    // Store a new admissions_aid
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

    // Create new admissions_aid
    $admissions_aid = new Admissions_Aid();
    $admissions_aid->image = $imageName;  // Corrected image assignment
    $admissions_aid->title = $request->input('title');
    $admissions_aid->description = $request->input('description');
    $admissions_aid->save();

    return redirect()->route('admissions_aids')->with('success', 'You added the admissions_aid successfully.');
}

    public function show($id)
{
    // Find the admissions_aid by id
    $admissions_aid = Admissions_Aid::findOrFail($id);
    // Pass the admissions_aid data to the view
    return view('content.categories.admissions_aid.view_admissions_aid')->with('admissions_aid', $admissions_aid);
}
public function delete($id)
{
    $admissions_aid = Admissions_Aid::find($id);

    if (!$admissions_aid) {
        return redirect()->route('admissions_aids')->with('error', 'admissions_aid not found.');
    }

    // Remove the admissions_aid's image from the storage
    $imagePath = public_path('images/' . $admissions_aid->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);  // Deletes the image from the file system
    }

    // Delete the admissions_aid record from the database
    $admissions_aid->delete();

    return redirect()->route('admissions_aids')->with('delete', 'admissions_aid deleted successfully.');
}
public function edit($id){
    $admissions_aidEdit = Admissions_Aid::Find($id);
    return view('content.categories.admissions_aid.add_or_edit_admissions_aid', compact('admissions_aidEdit'));
}
public function update(Request $request , $id){
    $request->validate([
        'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
        'title' => 'required',
        'description' => 'required',
    ]);
    $admissions_aid = Admissions_Aid::Find($id);
    if (!$admissions_aid) {
        return redirect()->route('admissions_aids')->with('error', 'admissions_aid not found.');
    }
    $admissions_aid->title = $request->input('title');
    $admissions_aid->description = $request->input('description');
    if ($request->hasFile('image')) {
        $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);
        $admissions_aid->image = $imageName;
    }
    $admissions_aid->save();
    return redirect()->route('admissions_aids')->with('admissions_aids' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = Admissions_Aid::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('title', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $admissions_aids = $query->get(); // Change from $students to $admissions_aids

    // Return the view with the list of admissions_aids
    return view('content.categories.admissions_aid.index')->with('admissions_aids', $admissions_aids);
}
}
