<?php

namespace App\Http\Controllers;

use App\Models\AboutMit;
use Illuminate\Http\Request;

class AboutMitController extends Controller
{
    //
    public function index(){
        $objAboutMits = AboutMit::orderby('id' , 'asc')->first();
        return view('aboutMIT.index',compact('objAboutMits'));
    }
}
