<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Path;
use Illuminate\Http\Request;
use App\Models\Categorie;


class Categories_Path_Controller extends Controller
{
    public function index()
    {
        $categories = Categorie::with('categories_path')->get();
        $categories_paths = Categorie_Path::with('categorie')->get();
        return view("content.categories_paths.index", compact('categories_paths', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    //     $categories = Categorie::with('categories_path')->get();
    //     $categories_paths = Categorie_Path::with('categories')->get();
    //     return view("content.categories_paths.add_or_edit_categories_paths" , compact('categories_paths','categories'));
    // }
    public function create()
{
    $categories = Categorie::with('categories_path')->get(); // This fetches categories with their paths
    $categories_paths = Categorie_Path::with('categorie')->get(); // Fetch paths with their associated category
    return view("content.categories_paths.add_or_edit_categories_paths", compact('categories','categories_paths'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => '',
            'description' => '',
            'image'=> '',
            'image_description' => '',
            'categorie_id' => '',
        ]);



        $categorie_path  = new Categorie_Path();
        $categorie_path->title = $request->input('title');
        $categorie_path->description = $request->input('description');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $categorie_path->image = $imageName;
        }
        $categorie_path->image_description = $request->input('image_description');
        $categorie_path->categorie_id = $request->input('categorie_id');

        $categorie_path->save();
        return redirect()->route('categorie_paths')->with('success', 'Your Create successfully!!!');
    }

    public function show(string $id)
    {
        $categorie_path = Categorie_Path::find($id);
        return view('content.categories_paths.view_categories_paths', compact('categorie_path'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categorie_pathEdit = Categorie_Path::find($id);
        $categories = Categorie::with('categories_path')->get();
        return view('content.categories_paths.add_or_edit_categories_paths', compact('categorie_pathEdit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
     function update(Request $request, $id)
{
    $categorie_path = Categorie_Path::find($id);
    if (!$categorie_path) {
        return redirect()->back()->with('error', 'Categorie Path not found.');
    }

    $request->validate([
        'title' => '',
        'description' => '',
        'image_description' => '',
        'categorie_id' => 'exists:categories,id',
        'image' => '',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $categorie_path->image = $imageName;
    }

    $categorie_path->title = $request->input('title');
    $categorie_path->description = $request->input('description');
    $categorie_path->image_description = $request->input('image_description');
    $categorie_path->categorie_id = $request->input('categorie_id');
    $categorie_path->save();

    return redirect()->route('categorie_paths')->with('success', 'Updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $categorie_pathdelete = Categorie_Path::find($id);
        $categorie_pathdelete->delete();
        return redirect()->route('categorie_paths')->with('delete', 'Your Delete successfully!!!');
    }
}
