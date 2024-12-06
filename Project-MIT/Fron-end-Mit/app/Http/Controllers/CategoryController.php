<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    function show($id){
        $objCategories = new Categorie();
        $category = $objCategories->where('id', $id)->with('category_paths')->first();
        return view("category.index",['category' => $category]);
    }
}
