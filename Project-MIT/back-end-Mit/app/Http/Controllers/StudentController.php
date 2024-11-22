<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentProfile;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view("user.student.index")->with('students' , $students);
    }
    public function create(){
        return view("user.student.add_or_edit_student");
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
        $imageName = '';
        if($request->hasFile("image")){
            $image = $request->file('image');
            $imageName = time(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $student = new Student();
        $student->name = $request->input('name');
        $student->sex = $request->input('sex');
        $student->dob = $request->input('dob');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->image = $imageName;
        $student->save();
        return redirect()->route('students')->with('success', 'Staff added successfully!');
    }
    public function delete($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('teachers')->with('error', 'Teacher not found.');
        }
        $imagePath = public_path('images/' . $student->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $student->delete();
        return redirect()->route('students')->with('delete', 'Teacher deleted successfully.');
    }

    public function edit($id){
        $studentEdit = Student::find($id);
        return view("user.student.add_or_edit_student")->with('studentEdit' , $studentEdit);
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

        $student = Student::Find($id);
        if (!$student) {
            return redirect()->route('students')->with('error', 'staff$staff not found.');
        }
        $student->name = $request->input('name');
        $student->sex = $request->input('sex');
        $student->dob = $request->input('dob');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        if ($request->hasFile('image')) {
            $imageName = time(). '.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }
        $student->save();
        return redirect()->route('students')->with('teachers' , 'your edit and update successsfull!!!');
    }
    public function search(Request $request)
    {
        $query = Student::query();
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('sex', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }
        $students = $query->get();
        return view('user.student.index')->with('students', $students);
    }
public function show($id)
{
    $student = student::findOrFail($id);
    return view('user.student.view_student')->with('student', $student);
}
}
