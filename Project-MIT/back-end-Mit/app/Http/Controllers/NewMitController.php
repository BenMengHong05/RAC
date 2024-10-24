<?php

namespace App\Http\Controllers;

use App\Models\Newmit_Categorie;
use App\Models\NewMit;
use Illuminate\Http\Request;

class NewMitController extends Controller
{
    //
    public function index()
    {

         // Fetch the products from the second category (New MITs)
        // $newmit_categorie = Newmit_Categorie::where('id', 'desc')->get();
        $newmits = NewMit::all(); // Fetch all newmits
        // Use compact to pass multiple variables to the view
        return view('content.post.newmit.index', compact('newmits'));
    }

    // Show the form to create a new newmit
    public function create()
    {
        return view('content.post.newmit.add_or_edit_newmit');
    }

    // Store a new newmit
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
    // Create new newmit
    $newmit = new NewMit();
    $newmit->image = $imageName;  // Corrected image assignment
    $newmit->title = $request->input('title');
    $newmit->description = $request->input('description');
    $newmit->save();
    return redirect()->route('newmits')->with('success', 'You added the newmit successfully.');
}
    public function show($id)
{
    // Find the newmit by id
    $newmit = NewMit::findOrFail($id);
    // Pass the newmit data to the view
    return view('content.post.newmit.view_newmit')->with('newmit', $newmit);
}
public function delete($id)
{
    $newmit = NewMit::find($id);

    if (!$newmit) {
        return redirect()->route('newmits')->with('error', 'newmit not found.');
    }

    // Remove the newmit's image from the storage
    $imagePath = public_path('images/' . $newmit->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);  // Deletes the image from the file system
    }

    // Delete the newmit record from the database
    $newmit->delete();

    return redirect()->route('newmits')->with('delete', 'newmit deleted successfully.');
}
public function edit($id){
    $newmitEdit = NewMit::Find($id);
    return view('content.post.newmit.add_or_edit_newmit', compact('newmitEdit'));
}
public function update(Request $request , $id){
    $request->validate([
        'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
        'title' => 'required',
        'description' => 'required',
    ]);
    $newmit = NewMit::Find($id);
    if (!$newmit) {
        return redirect()->route('newmits')->with('error', 'newmit not found.');
    }
    $newmit->title = $request->input('title');
    $newmit->description = $request->input('description');
    if ($request->hasFile('image')) {
        $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);
        $newmit->image = $imageName;
    }
    $newmit->save();
    return redirect()->route('newmits')->with('newmits' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = NewMit::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('title', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $newmits = $query->get(); // Change from $students to $newmits

    // Return the view with the list of newmits
    return view('content.post.newmit.index')->with('newmits', $newmits);
}
}
