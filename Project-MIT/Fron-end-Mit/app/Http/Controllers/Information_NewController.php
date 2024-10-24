<?php

namespace App\Http\Controllers;

use App\Models\NewMit;
use Illuminate\Http\Request;

class Information_NewController extends Controller
{
    //
    public function index(){
        $objNewmit =NewMit::orderby('id', 'asc')->get();
        return view('news.index', compact('objNewmit'));
    }
}
