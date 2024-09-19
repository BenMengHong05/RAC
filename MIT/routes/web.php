<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view('index.index');

});
Route::get('index',function(){
    return view('index.index');

});;
Route::get('education',function(){
    return view('education.index');
});
Route::get('research',function(){
    return view('research.index');
});
Route::get('innovation',function(){
    return view('innovation.index');
});
Route::get('admissions+Aid',function(){
    return view('admissions+Aid.index');
});
Route::get('campusLife',function(){
    return view('campusLife.index');
});
Route::get('news',function(){
    return view('news.index');
});
Route::get('alumni',function(){
    return view('alumni.index');
});
Route::get('aboutMIT',function(){
    return view('aboutMIT.index');
});
