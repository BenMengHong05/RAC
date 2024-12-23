<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    function show($id)
    {
        $category = Categorie::where('id', $id)
        ->with([
            'category_paths' => function ($query) {
                $query->orderBy('id', 'desc');
            },
            'category_images' => function ($query) {
                $query->orderBy('id', 'desc');
            },
        ])
        ->first();

    if (!$category) {
        return redirect()->route('categories.index')->with('error', 'Category not found.');
    }

    return view("category.index", ['category' => $category]);
    }
}
