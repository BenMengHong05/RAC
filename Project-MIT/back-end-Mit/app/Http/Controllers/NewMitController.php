<?php

namespace App\Http\Controllers;

use App\Models\NewMit;
use Illuminate\Http\Request;

class NewMitController extends Controller
{
    //
    public function index()
    {

        $newmits = NewMit::all();
        // dd($newmits);
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
    $newmit = new NewMit();
    $newmit->image = $imageName;
    $newmit->title = $request->input('title');
    $newmit->description = $request->input('description');
    $newmit->save();
    return redirect()->route('newmits')->with('success', 'You added the newmit successfully.');
}
    public function show($id)
{
    $newmit = NewMit::findOrFail($id);
    return view('content.post.newmit.view_newmit')->with('newmit', $newmit);
}
public function delete($id)
{
    $newmit = NewMit::find($id);
    if (!$newmit) {
        return redirect()->route('newmits')->with('error', 'newmit not found.');
    }

    $imagePath = public_path('images/' . $newmit->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
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
    return redirect()->route('newmits')->with('update' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = NewMit::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where(function($q) use ($search) {
            $q->where('title', 'LIKE', "%{$search}%")
              ->orWhere('description', 'LIKE', "%{$search}%")
              ->orWhereHas('categorie', function($q) use ($search) {
                  $q->where('name', 'LIKE', "%{$search}%");
              });
        });
    }
    $newmits = $query->get(); // Change from $students to $newmits

    // Return the view with the list of newmits
    return view('content.post.newmit.index')->with('newmits', $newmits);
}
}
