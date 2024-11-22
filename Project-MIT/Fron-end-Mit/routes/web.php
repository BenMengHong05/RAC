<?php

use App\Http\Controllers\AboutMitController;
use App\Http\Controllers\Admissions_AidController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Campus_LifeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\Information_NewController;
use App\Http\Controllers\InnovationController;
use App\Http\Controllers\NewMitController;
use App\Http\Controllers\ResearchController;

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






Route::get('/',[NewMitController::class,'index']);
Route::get('/education',[EducationController::class,'index'])->name('education');
Route::get('/research',[ResearchController::class,'index'])->name('research');
Route::get('/innovation',[InnovationController::class,'index'])->name('innovation');
Route::get('/admissions_aid',[Admissions_AidController::class,'index'])->name('admissions_aid');
Route::get('/campuslife',[Campus_LifeController::class,'index'])->name('campuslife');
Route::get('/news',[Information_NewController::class,'index'])->name('news');
Route::get('/alumni',[AlumniController::class,'index'])->name('alumnu');
Route::get('/aboutmit',[AboutMitController::class, 'index'])->name('aboutmit');
Route::get("/error", function(){
    return view('page.index_error');
});






