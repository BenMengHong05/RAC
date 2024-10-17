<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;

class InnovationController extends Controller
{
    //
        //
        public function index()
        {
            $innovations = Innovation::all(); // Fetch all innovations
            return view('content.categories.innovation.index', compact('innovations')); // Pass to view
        }


        // Show the form to create a new innovation
        public function create()
        {
            return view('content.categories.innovation.add_or_edit_innovation');
        }

        // Store a new innovation
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

        // Create new innovation
        $innovation = new Innovation();
        $innovation->image = $imageName;  // Corrected image assignment
        $innovation->title = $request->input('title');
        $innovation->description = $request->input('description');
        $innovation->save();

        return redirect()->route('innovations')->with('success', 'You added the innovation successfully.');
    }

        public function show($id)
    {
        // Find the innovation by id
        $innovation = Innovation::findOrFail($id);
        // Pass the innovation data to the view
        return view('content.categories.innovation.view_innovation')->with('innovation', $innovation);
    }
    public function delete($id)
    {
        $innovation = Innovation::find($id);

        if (!$innovation) {
            return redirect()->route('innovations')->with('error', 'innovation not found.');
        }

        // Remove the innovation's image from the storage
        $imagePath = public_path('images/' . $innovation->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);  // Deletes the image from the file system
        }

        // Delete the innovation record from the database
        $innovation->delete();

        return redirect()->route('innovations')->with('delete', 'innovation deleted successfully.');
    }
    public function edit($id){
        $innovationEdit = Innovation::Find($id);
        return view('content.categories.innovation.add_or_edit_innovation', compact('innovationEdit'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        $innovation = Innovation::Find($id);
        if (!$innovation) {
            return redirect()->route('innovations')->with('error', 'innovation not found.');
        }
        $innovation->title = $request->input('title');
        $innovation->description = $request->input('description');
        if ($request->hasFile('image')) {
            $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $innovation->image = $imageName;
        }
        $innovation->save();
        return redirect()->route('innovations')->with('innovations' , 'your edit and update successsfull!!!');
    }


    public function search(Request $request)
    {
        $query = Innovation::query();

        // Check if there's a search input
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%"); // Search by name
        }

        // Execute the query to get results
        $innovations = $query->get(); // Change from $students to $innovations

        // Return the view with the list of innovations
        return view('content.categories.innovation.index')->with('innovations', $innovations);
    }
}
