<?php

namespace App\Http\Controllers;

use App\Models\AboutMit;
use Illuminate\Http\Request;

class AboutMitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutmits = AboutMit::all();
        return view('content.post.aboutmit.index', compact('aboutmits'));
    }

    /**

     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('content.post.aboutmit.add_or_edit_aboutmit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2000',
        ]);
        $aboutmit = new AboutMit();
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
        $aboutmit->title = $request->input('title');
        $aboutmit->description = $request->input('description');
        $aboutmit->image = $imageName;
        $aboutmit->save();

        return redirect()->route('aboutmits')->with('success','Your Create successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $aboutmits = AboutMit::find($id);
        return view('content.post.aboutmit.view_aboutmit',compact('aboutmits'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $aboutmitEdit = AboutMit::find($id);
        return view('content.post.aboutmit.add_or_edit_aboutmit',compact('aboutmitEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2000'
        ]);
        $aboutmit = AboutMit::find($id);
        if($request->hasFile('image')){
            try {
                $image = $request->file('image');
                $imageName = time(). '.'. $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image upload failed: '. $e->getMessage());
            }
            $aboutmit->image = $imageName;

        }else{
            $imageName = $aboutmit->image;
        }
        $aboutmit->title = $request->input('title');
        $aboutmit->description = $request->input('description');
        $aboutmit->image = $imageName;
        $aboutmit->save();
        return redirect()->route('aboutmits')->with('success', 'Your Update Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $aboutmit = AboutMit::find($id);
        $aboutmit->delete();
        return redirect()->route('aboutmits')->with('delete', 'Your Delete successfully!!!');
    }
}
