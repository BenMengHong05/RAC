<?php

namespace App\Http\Controllers;

use App\Models\Admissions_Aid;
use Illuminate\Http\Request;

class Admissions_AidController extends Controller
{
    //
    public function index(){
        $admissions_aids = Admissions_Aid::orderby('id' , 'desc')->first();
        return view('admissions+Aid.index', compact('admissions_aids'));
    }
}
