<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('user.teacher.index')->with('teachers', $teachers);
    }
    public function create()
    {
        return view('user.teacher.add_or_edit_teacher');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
            'name' => 'required|max:100',
            'sex' => 'required|in:M,F',
            'dob' => 'required|date',
            'phone' => 'required|numeric|digits_between:9,12',
        ]);
        $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        $teacher = new Teacher();
        $teacher->image = $imageName;
        $teacher->name = $request->input('name');
        $teacher->sex = $request->input('sex');
        $teacher->dob = $request->input('dob');
        $teacher->phone = $request->input('phone');
        $teacher->save();

        return redirect()->route('teachers')->with('success', 'You added the teacher successfully.');
    }
    public function show($id)
{
    $teacher = Teacher::findOrFail($id);
    return view('user.teacher.view_teacher')->with('teacher', $teacher);
}
public function delete($id)
{
    $teacher = Teacher::find($id);
    if (!$teacher) {
        return redirect()->route('teachers')->with('error', 'Teacher not found.');
    }

    $imagePath = public_path('images/' . $teacher->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
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
    if ($request->has('search') && $request->search != '') {
        $search = $request->input('search');
        $query->where('name', 'LIKE', "%{$search}%");
    }
    $teachers = $query->get();
    return view('user.teacher.index')->with('teachers', $teachers);
}
}
