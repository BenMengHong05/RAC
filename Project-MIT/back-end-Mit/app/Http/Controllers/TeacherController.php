<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all(); // Fetch all teachers
        return view('user.teacher.index')->with('teachers', $teachers); // Pass teachers to the view
    }

    // Show the form to create a new teacher
    public function create()
    {
        return view('user.teacher.add_or_edit_teacher');
    }

    // Store a new teacher
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
            'name' => 'required|max:100',
            'sex' => 'required|in:M,F',
            'dob' => 'required|date',
            'phone' => 'required|numeric|digits_between:9,12',
        ]);

        // Handle image upload
        $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Fixed path to 'images'
        }

        // Create new teacher
        $teacher = new Teacher();
        $teacher->image = $imageName;  // Corrected image assignment
        $teacher->name = $request->input('name');
        $teacher->sex = $request->input('sex');
        $teacher->dob = $request->input('dob');
        $teacher->phone = $request->input('phone');
        $teacher->save();

        return redirect()->route('teachers')->with('success', 'You added the teacher successfully.');
    }
    public function show($id)
{
    // Find the teacher by id
    $teacher = Teacher::findOrFail($id);
    // Pass the teacher data to the view
    return view('user.teacher.view_teacher')->with('teacher', $teacher);
}
public function delete($id)
{
    $teacher = Teacher::find($id);

    if (!$teacher) {
        return redirect()->route('teachers')->with('error', 'Teacher not found.');
    }

    // Remove the teacher's image from the storage
    $imagePath = public_path('images/' . $teacher->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);  // Deletes the image from the file system
    }

    // Delete the teacher record from the database
    $teacher->delete();

    return redirect()->route('teachers')->with('delete', 'Teacher deleted successfully.');
}
public function edit($id){
    $teacherEdit = Teacher::Find($id);
    return view('user.teacher.add_or_edit_teacher')->with('teacherEdit' , $teacherEdit);
}
public function update(Request $request , $id){
    $request->validate([
        'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2000',
        'name' => 'required|max:100',
        'sex' => 'required|in:M,F',
        'dob' => 'required|date',
        'phone' => 'required|numeric|digits_between:9,12'
    ]);
    $teacher = Teacher::Find($id);
    if (!$teacher) {
        return redirect()->route('teachers')->with('error', 'Teacher not found.');
    }
    $teacher->name = $request->input('name');
    $teacher->sex = $request->input('sex');
    $teacher->dob = $request->input('dob');
    $teacher->phone = $request->input('phone');
    if ($request->hasFile('image')) {
        $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName);
        $teacher->image = $imageName;
    }
    $teacher->save();
    return redirect()->route('teachers')->with('teachers' , 'your edit and update successsfull!!!');
}


public function search(Request $request)
{
    $query = Teacher::query();

    // Check if there's a search input
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('name', 'LIKE', "%{$search}%"); // Search by name
    }

    // Execute the query to get results
    $teachers = $query->get(); // Change from $students to $teachers

    // Return the view with the list of teachers
    return view('user.teacher.index')->with('teachers', $teachers);
}


}
