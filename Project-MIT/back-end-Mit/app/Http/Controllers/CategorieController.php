<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = categorie::all(); // Fetch all categories
        return view('content.categories.index', compact('categories'));
    }

    // Show the form to create a new category
    public function create()
    {
        return view('content.categories.add_or_edit_categorie');
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // Create new category
        $categorie = new Categorie();
        $categorie->name = $request->input('name');
        $categorie->save();

        return redirect()->route('categories')->with('success', 'Category added successfully.');
    }

    // Show a specific category
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('content.categories.view_categorie', compact('categorie'));
    }

    // Delete a category
    public function delete($id)
    {
        $categorie = Categorie::find($id);

        if (!$categorie) {
            return redirect()->route('categories')->with('error', 'Category not found.');
        }

        $categorie->delete();
        return redirect()->route('categories')->with('delete', 'Category deleted successfully.');
    }

    // Show the edit form
    public function edit($id)
    {
        $categorieEdit = Categorie::findOrFail($id);
        return view('content.categories.add_or_edit_categorie', compact('categorieEdit'));
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categorie = Categorie::findOrFail($id);
        $categorie->name = $request->input('name');
        $categorie->save();

        return redirect()->route('categories')->with('success', 'Category updated successfully!');
    }

    // Search for categories by name
    public function search(Request $request)
    {
        $query = Categorie::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%"); // Search by name
        }

        $categories = $query->get();
        return view('content.categories.index', compact('categories','query'));
    }

}