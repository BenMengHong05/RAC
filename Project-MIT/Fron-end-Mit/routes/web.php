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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;

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
Route::get('/category/{id}/show',[CategoryController::class, 'show'])->name('category.show');
Route::get("/error", function(){
    return view('page.index_error');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');






