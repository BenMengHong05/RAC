<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    //
    public function index(){
        $researchs = Research::orderby('id' , 'desc')->first();
        return view('research.index' , compact('researchs'));
    }
}
