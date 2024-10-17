<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Count the number of students, teachers, and staff
        $staffs = Staff::count();
        $students = Student::count();
        $teachers = Teacher::count();

        // Pass the staff count to the view
        return view('index.index', compact('staffs' , 'students' , 'teachers'));
    }
}
