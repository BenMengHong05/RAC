<?php

use App\Http\Controllers\StudentController;
use Illuminate\Routing\RouteGroup;
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


    Route::get("/student" , [StudentController::class , "index"])->name("student");
    Route::get("/student_create" , [StudentController::class , "create"])->name("student_create");
    Route::post("/student_store", [StudentController::class , "store"])->name("student_store");
    Route::delete("/student_delete/{id}" , [StudentController::class, "delete"])->name("student_delete");
    Route::get("/student_delete/{id}/edit" , [StudentController::class, "edit"])->name("student_edit");
    Route::put("/student_update/{id}", [StudentController::class , "update"])->name("student_update");
    Route::get('/students/search', [StudentController::class, 'search'])->name('student_search');





