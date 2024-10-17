<?php

namespace App\Http\Controllers;

use App\Models\CampusLife;
use Illuminate\Http\Request;

class Campus_LifeController extends Controller
{
    //
    public function index(){
        $campuslifes = CampusLife::orderby('id' , 'desc')->first();
        return view('campusLife.index', compact('campuslifes'));
    }
}
