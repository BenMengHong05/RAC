<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;

class InnovationController extends Controller
{
    //
    public function index(){
        $innovations = Innovation::orderby('id' , 'desc')->first();
        return view('innovation.index', compact('innovations'));

    }
}
