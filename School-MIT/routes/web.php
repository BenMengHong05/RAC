<?php

use App\Http\Controllers\AuthController;
use Illuminate\Contracts\View\View;
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
Route::get("/" , [AuthController::class,"login"])
->name("login");
Route::post("/login", [AuthController::class,"loginPost"])
->name("login.post");
Route::get("/register" , [AuthController::class,"register"])
->name("register");
Route::post("/register", [AuthController::class,"registerPost"])
->name("register.post");
Route::Post("logout", [AuthController::class,"logout"])->name("logout");
// Group of routes requiring authentication
Route::middleware("auth")->group(function() {
    Route::get('/categories', function () {
        return view('content.categories.index');
    });
    Route::get('/editpc', function () { //p= post and c = categories
        return view('content.edit.index');
    });
    Route::get('/addpc', function () { //p= post and c = categories
        return view('content.add.index');
    });
    Route::get('/admin', function () {
        return view('user.admin.index');
    });
    Route::get('/staff', function () {
        return view('user.staff.index');
    });
    Route::get('/add', function () {
        return view('user.product.add.index');
    });
    Route::get('/edit', function () {
        return view('user.product.edit.index');
    });
    Route::get('/education' , function (){
        return view("product.education.index");
    });
    Route::get('/research' , function (){
        return view('product.research.index');
    });
    Route::get('/innovation' , function (){
        return view('product.innovation.index');
    });
    Route::get('/admissions_aid' , function (){
        return view('product.admissinos_aid.index');
    });
    Route::get('/campus_life' , function (){
        return view('product.champus_life.index');
    });
    Route::get('/news' , function (){
        return view('product.news.index');
    });
    Route::get('/alumni' , function (){
        return view('product.alumni.index');
    });
    Route::get('/about_mit' , function (){
        return view('product.about_mit.index');
    });
    Route::get('/index', function () {
        return view('index.index');
    })->name('index');

});


