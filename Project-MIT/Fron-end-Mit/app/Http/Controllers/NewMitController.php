<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\NewMit;
use Illuminate\Http\Request;

class NewMitController extends Controller
{
    //
    public function index()
    {


        $objNewmits =NewMit::where('categorie_id','9')->orderby('id', 'desc')->get();
        // $objCategories = Categorie::with('newmits')->get();
        // $objCategories = Categorie::with('newmits')
        //                 ->where('id','9')
        //                 ->orderBy('id', 'desc')->get();
        return view('index.index', compact('objNewmits'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
