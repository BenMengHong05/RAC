<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Teacher;

class LanguageController extends Controller
{
    //

    public function switchLang($lang){
        if(array_key_exists($lang,config('app.languages'))){
            Session::put('locale',$lang);
            App::setLocale($lang);
        }
        return redirect()->back();
    }
    public function index(){
        $staffs = Staff::count();
        $students = Student::count();
        $teachers = Teacher::count();
        return view("index.index",compact('staffs' , 'students' , 'teachers'));
    }

}
