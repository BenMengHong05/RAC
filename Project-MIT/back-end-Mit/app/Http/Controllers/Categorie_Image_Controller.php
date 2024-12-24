<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Categorie_Image;
use Illuminate\Http\Request;

class Categorie_Image_Controller extends Controller
{

    public function index()
    {
        $categories = Categorie::with('categories_image')->get();
        $categories_images = Categorie_Image::with('categorie')->get();
        return view('content.categories_images.index', compact('categories_images', 'categories'));
    }


    public function create()
    {
        //
        $categories = Categorie::with('categories_image')->get(); // This fetches categories with their paths
        $categories_images = Categorie_Image::with('categorie')->get(); // Fetch paths with their associated category
        return view("content.categories_images.add_or_edit_page_categories_images", compact('categories', 'categories_images'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $categorie_image  = new Categorie_Image();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $categorie_image->image = $imageName;
        }
        $categorie_image->categorie_id = $request->input('categorie_id');
        $categorie_image->save();
        return redirect()->route('categorie_images')->with('success', 'Your Create successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie_image = Categorie_Image::find($id);
        return view('content.categories_images.page_categories_images_view', compact('categorie_image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categorie_imageEdit = Categorie_Image::find($id);
        $categories = Categorie::with('categories_image')->get();
        return view('content.categories_images.add_or_edit_page_categories_images', compact('categorie_imageEdit', 'categories'));
    }


    public function update(Request $request, string $id)
{
    $categorie_image = Categorie_Image::find($id);
    if (!$categorie_image) {
        return redirect()->back()->with('error', 'Categorie Path not found.');
    }

    $request->validate([
        'categorie_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        try {
            $image->move(public_path('images'), $imageName);
            if ($categorie_image->image && file_exists(public_path('images/' . $categorie_image->image))) {
                unlink(public_path('images/' . $categorie_image->image));
            }
            $categorie_image->image = $imageName;
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to upload the image. Please try again.');
        }
    }
    $categorie_image->categorie_id = $request->input('categorie_id');
    $categorie_image->save();
    return redirect()->route('categorie_images.index')->with('success', 'Categorie Path updated successfully!');
}
    public function delete(string $id)
    {
        $categorie_imagedelete = Categorie_Image::find($id);
        if (!$categorie_imagedelete) {
            return redirect()->route('categorie_images')->with('error', 'Categorie Path not found.');
        }
        $categorie_imagedelete->delete();
        return redirect()->route('categorie_images')->with('success', 'Deleted successfully!');
    }
}
