<?php

namespace App\Http\Controllers;

use App\Models\CampusLife;
use Illuminate\Http\Request;

class CampusLifeController extends Controller
{
    //
    public function index(){
        $campuslifes = CampusLife::all();
        return view("content.post.campuslife.index")->with('campuslifes', $campuslifes);
    }
    public function create(){
        return view("content.post.campuslife.add_or_edit_campuslife");
    }
    public function store(Request $request){
        $request->validate([
            'title' =>  'required|',
            'description' =>  'required|',
            'image' =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($request->hasFile('image')){
            try {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image upload failed: ' . $e->getMessage());
            }
        }else {
            return redirect()->back()->with('error', 'No image file was uploaded.');
        }

        $campuslife = new CampusLife();
        $campuslife->title = $request->input('title');
        $campuslife->description = $request->input('description');
        $campuslife->image = $imageName;
        $campuslife->save();
        return redirect()->route('campuslifes')->with('success', 'You added the education successfully.');
    }
    public function delete($id){
        $campuslife = CampusLife::Find($id);
        if(!$campuslife){
            return redirect()->route('campuslifes')->with('error', 'Campus life not found');
        }
        $imagePath = public_path('images/' . $campuslife->image);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
        $campuslife->delete();
        return redirect()->route('campuslifes')->with('delete', 'Campus life deleted successfully');

    }


    public function show($id){
        $campuslife = CampusLife::findOrFail($id);
        return view("content.post.campuslife.view_campuslife")->with('campuslife', $campuslife);
    }


    public function edit($id){
        $campuslifeEdit = CampusLife::Find($id);
        return view('content.post.campuslife.add_or_edit_campuslife', compact('campuslifeEdit'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);
        $campuslife = CampusLife::Find($id);
        if (!$campuslife) {
            return redirect()->route('campuslifes')->with('error', 'campuslife not found.');
        }
        $campuslife->title = $request->input('title');
        $campuslife->description = $request->input('description');
        if ($request->hasFile('image')) {
            $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $campuslife->image = $imageName;
        }
        $campuslife->save();
        return redirect()->route('campuslifes')->with('campuslifes' , 'your edit and update successsfull!!!');
    }


    public function search(Request $request){
        $qurey = CampusLife::query();

        if($request->has('search') && $request->search != ''){
            $search = $request->input('search');
            $qurey->where( 'title' , 'LIKE' , '%{$search}%' );
        }
        $campuslife = $qurey->get();
        return view('content.post.campuslife.index')->with('campuslifes', $campuslife);
    }
}
