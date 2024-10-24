<?php

namespace App\Http\Controllers;

use App\Models\Information_New;
use Illuminate\Http\Request;

class Information_NewController extends Controller
{
    //
    public function index(){
        $information_new = Information_New::orderby('id' , 'desc')->first();
        return view('news.index', compact('information_new'));
    }
}
