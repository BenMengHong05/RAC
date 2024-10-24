<?php

namespace App\Http\Controllers;

use App\Models\Newmit_Categorie;
use Illuminate\Http\Request;

class Newmit_CategoriesController extends Controller
{
    //
    public function index()
    {
         // Fetch the products from the second category (New MITs)
        // $newmit_categorie = Newmit_Categorie::where('id', 'desc')->get();
        $newmit_categories = Newmit_Categorie::all(); // Fetch all newmits
        // Use compact to pass multiple variables to the view
        return view('content.categories.index', compact('newmit_categories'));
    }

    // Show the form to create a new newmit
    public function create()
    {
        return view('content.categories.add_or_edit_categorie');
    }

    // Store a new newmit
    public function store(Request $request)
{
    $request->validate([

        'name' => 'required',
    ]);

    // Handle image upload

    // Create new newmit
    $newmit_categorie = new Newmit_Categorie();
    $newmit_categorie->name = $request->input('name');
    $newmit_categorie->save();
    return redirect()->route('newmit_categories')->with('success', 'You added the newmit successfully.');
}
    public function show($id)
{
    // Find the newmit by id
    $newmit_categorie = Newmit_Categorie::findOrFail($id);
    // Pass the newmit data to the view
    return view('content.categories.view_categorie')->with('newmit', $newmit_categorie);
}
public function delete($id)
{
    $newmit_categorie = Newmit_Categorie::find($id);

    if (!$newmit_categorie) {
        return redirect()->route('newmit_categorie')->with('error', 'newmit not found.');
    }


    // Delete the newmit record from the database
    $newmit_categorie->delete();

    return redirect()->route('newmit_categorie')->with('delete', 'newmit deleted successfully.');
}
public function edit($id){
    $newmit_categorieEdit = Newmit_Categorie::Find($id);
    return view('content.categories.add_or_edit_categorie', compact('newmit_categorieEdit'));
}
public function update(Request $request , $id){
    $request->validate([

        'name' => 'required',
    ]);
    $newmit_categorie = Newmit_Categorie::Find($id);
    if (!$newmit_categorie) {
        return redirect()->route('newmit_categorie')->with('error', 'newmit not found.');
    }
    $newmit_categorie->name = $request->input('name');
    $newmit_categorie->save();
    return redirect()->route('newmit_categorie')->with('newmits' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = Newmit_Categorie::query();
    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('name', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $newmit_categories = $query->get(); // Change from $students to $newmits

    // Return the view with the list of newmits
    return view('content.categories.index')->with('newmit_categories', $newmit_categories);
}

}
