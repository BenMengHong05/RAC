<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index(){
        $staffs = Staff::all();
        return view("user.staff.index")->with('staffs' , $staffs);
    }
    public function create(){
        return view("user.staff.add_or_edit_staff");
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif',
            'name' => 'required',
            'sex' => 'required|in:M,F',
            'dob' => 'required|date',
            'email' => 'required|email|unique:staffs,email,' . ($staffEdit->id ?? 'NULL'),
            'phone' => 'required|numeric',
        ]);

        // Handle image upload
        $imageName = '';
        if($request->hasFile("image")){
            $image = $request->file('image');
            $imageName = time(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);  // Save the image in the 'public/images' directory
        }
        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->sex = $request->input('sex');
        $staff->dob = $request->input('dob');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->image = $imageName;
        $staff->save();
        return redirect()->route('staffs')->with('success', 'Staff added successfully!');
    }
    public function delete($id)
    {
        $staff = Staff::find($id);

        if (!$staff) {
            return redirect()->route('teachers')->with('delete', 'Staff added successfully!');
        }

        // Remove the teacher's image from the storage
        $imagePath = public_path('images/' . $staff->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);  // Deletes the image from the file system
        }

        // Delete the teacher record from the database
        $staff->delete();

        return redirect()->route('staffs')->with('delete', 'staff deleted successfully.');
    }

    public function edit($id){
        $staffEdit = Staff::find($id);
        return view("user.staff.add_or_edit_staff", compact('staffEdit'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif',
            'name' => 'required',
            'sex' => 'required|in:M,F',
            'dob' => 'required|date',
           'email' => 'required|email|unique:staffs,email,' . ($staffEdit->id ?? 'NULL'),
            'phone' => 'required|numeric',
        ]);

        $staff = Staff::Find($id);
        if (!$staff) {
            return redirect()->route('staff$staffs')->with('error', 'staff$staff not found.');
        }
        $staff->name = $request->input('name');
        $staff->sex = $request->input('sex');
        $staff->dob = $request->input('dob');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        if ($request->hasFile('image')) {
            $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $staff->image = $imageName;
        }
        $staff->save();
        return redirect()->route('teachers')->with('teachers' , 'your edit and update successsfull!!!');
    }
    public function search(Request $request)
{
    $query = Staff::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('name', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $staffs = $query->get(); // Change from $students to $teachers

    // Return the view with the list of teachers
    return view('user.staff.index')->with('staffs', $staffs);
}


public function show($id)
{
    // Find the teacher by id
    $staff = Staff::findOrFail($id);
    // Pass the teacher data to the view
    return view('user.staff.view_staff')->with('staff', $staff);
}
}
