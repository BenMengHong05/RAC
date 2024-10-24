<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

function enducation(){
    return view ('education');
}
function research(){
    return view ('research');
}
function innovation(){
    return view ('innovation');
}
function admissionsAid(){
    return view ('admissions+Aid');
}
function campusLife(){
    return view ('campusLife');
}
function news(){
    return view ('news');
}
function alumni(){
    return view ('alumni');
}
function aboutMIT(){
    return view ('aboutMIT');
}
