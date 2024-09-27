<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view("index")->with('students' , $students);
    }
    public function create(){
        return view("studdent_table");
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'dob' => 'required',
            'phone' => 'required|max:10'
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->dob = $request->input('dob');
        $student->phone = $request->input('phone');
        $student->save();


        return redirect()->route('student')->with('success', 'Student created successfully');


    }
    public function delete($id){
        $student = Student::find($id);
        if($student){
            $student->delete();
            return redirect()->route('student')->with('delete', 'sudent delete successfully!!!!');
        }
    }
    public function edit($id){
        $studentEdit = Student::find($id);
        return view("studdent_table",compact('studentEdit'));
    }
    public function update( Request $request , $id){
        $request->validate([
            'name' => 'required|max:50',
            'dob' => 'required',
            'phone' => 'required|max:10'
        ]);
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('student')->with('error', 'Student not found');
        }
        $student->name = $request->input('name');
        $student->dob = $request->input('dob');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->route('student')->with('success' , 'student edit successfully!!!');
    }

    public function search(Request $request)
    {
        $query = Student::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%"); // Adjust the field as needed
        }

        $students = $query->get();

        return view('index', compact('students'));
    }
}
