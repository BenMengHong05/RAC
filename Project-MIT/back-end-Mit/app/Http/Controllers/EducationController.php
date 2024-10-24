<?php

namespace App\Http\Controllers;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {

        $educations = Education::all(); // Fetch all educations
        return view('content.post.education.index')->with('educations', $educations); // Pass educations to the view
    }

    // Show the form to create a new education
    public function create()
    {
        return view('content.post.education.add_or_edit_education');
    }

    // Store a new education
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

    // Create new education
    $education = new Education();
    $education->image = $imageName;  // Corrected image assignment
    $education->title = $request->input('title');
    $education->description = $request->input('description');
    $education->save();

    return redirect()->route('educations')->with('success', 'You added the education successfully.');
}

    public function show($id)
{
    // Find the education by id
    $education = Education::findOrFail($id);
    // Pass the education data to the view
    return view('content.post.education.view_education')->with('education', $education);
}
public function delete($id)
{
    $education = Education::find($id);

    if (!$education) {
        return redirect()->route('educations')->with('error', 'education not found.');
    }

    // Remove the education's image from the storage
    $imagePath = public_path('images/' . $education->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);  // Deletes the image from the file system
    }

    // Delete the education record from the database
    $education->delete();

    return redirect()->route('educations')->with('delete', 'education deleted successfully.');
}
public function edit($id){
    $educationEdit = Education::Find($id);
    return view('content.post.education.add_or_edit_education', compact('educationEdit'));
}
public function update(Request $request , $id){
    $request->validate([
        'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
        'title' => 'required',
        'description' => 'required',
    ]);
    $education = Education::Find($id);
    if (!$education) {
        return redirect()->route('educations')->with('error', 'education not found.');
    }
    $education->title = $request->input('title');
    $education->description = $request->input('description');
    if ($request->hasFile('image')) {
        $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);
        $education->image = $imageName;
    }
    $education->save();
    return redirect()->route('educations')->with('educations' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = Education::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('title', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $educations = $query->get(); // Change from $students to $educations

    // Return the view with the list of educations
    return view('content.post.education.index')->with('educations', $educations);
}
}
