<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

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
            'province' => 'required',
        ]);
        // Handle image upload
        $imageName = '';
        if($request->hasFile("image")){
            $image = $request->file('image');
            $imageName = time(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);  // Save the image in the 'public/images' directory
        }
        $student = new Student();
        $student->name = $request->input('name');
        $student->sex = $request->input('sex');
        $student->dob = $request->input('dob');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->province = $request->input('province');
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
        // Remove the teacher's image from the storage
        $imagePath = public_path('images/' . $student->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);  // Deletes the image from the file system
        }
        // Delete the teacher record from the database
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
            'province' => 'required',
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
        $query = Student::query();  // Assuming you are querying the 'students' table

        // Check if there's a search input
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');

            // Modify the query to search by name, sex, and email
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('sex', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }

        // Execute the query to get results
        $students = $query->get();

        // Return the view with the list of students
        return view('user.student.index')->with('students', $students);
    }


public function show($id)
{
    // Find the teacher by id
    $student = student::findOrFail($id);
    // Pass the teacher data to the view
    return view('user.student.view_student')->with('student', $student);
}
}
