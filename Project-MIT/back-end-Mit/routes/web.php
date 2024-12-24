<?php

use App\Http\Controllers\AboutMitController;
use App\Http\Controllers\Admissions_AidController;
use App\Http\Controllers\AluminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampusLifeController;
use App\Http\Controllers\Categorie_Image_Controller;
use App\Http\Controllers\PostController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Categories_Path_Controller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\InnovationController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewMitController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\AboutMit;
use App\Models\Categorie;
use PhpParser\Node\Stmt\Switch_;
use Stichoza\GoogleTranslate\GoogleTranslate;

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



Route::get("/", [AuthController::class, "login"])
    ->name("login");
Route::post("/login", [AuthController::class, "loginPost"])
    ->name("login.post");
Route::get("/register", [AuthController::class, "register"])
    ->name("register");
Route::post("/register", [AuthController::class, "registerPost"])
    ->name("register.post");
Route::Post("logout", [AuthController::class, "logout"])->name("logout");
Route::middleware("auth")->group(function () {
    Route::get('/dashboard', [LanguageController::class, 'index'])->name('dashboard');
    Route::get("/lang{lang}", [LanguageController::class, 'switchlang'])->name('lang.switch');

    Route::get("/news", [NewMitController::class, "index"])->name("new");

    Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
    Route::get("categorie_create", [CategorieController::class, "create"])->name("categorie_create");
    Route::post("categorie_post", [CategorieController::class, "store"])->name("categorie_store");
    Route::get("/categories/{id}", [CategorieController::class, "show"])->name("categorie_show");
    Route::delete("/categorie/delete/{id}", [CategorieController::class, "delete"])->name("categorie_delete");
    Route::get("/categorie/{id}/edit", [CategorieController::class, "edit"])->name("categorie_edit");
    Route::put("/categorie/{id}", [CategorieController::class, "update"])->name("categorie_update");
    Route::get('/categorie/search', [CategorieController::class, 'search'])->name('categorie_search');

    Route::get('/newmits', [NewMitController::class, 'index'])->name('newmits');
    Route::get("/newmit_create", [NewMitController::class, "create"])->name("newmit_create");
    Route::post("/newmit_post", [NewMitController::class, "store"])->name("newmit_store");
    Route::get("/newmits/{id}", [NewMitController::class, "show"])->name("newmit_show");
    Route::delete("/newmit/delete/{id}", [NewMitController::class, "delete"])->name("newmit_delete");
    Route::get("/newmit/{id}/edit", [NewMitController::class, "edit"])->name("newmit_edit");
    Route::put("/newmit/{id}", [NewMitController::class, "update"])->name("newmit_update");
    Route::get('/newmit/search', [NewMitController::class, 'search'])->name('newmit_search');

    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get("/teacher_create", [TeacherController::class, "create"])->name("teacher_create");
    Route::post("/teacher_post", [TeacherController::class, "store"])->name("teacher_store");
    Route::get("/teachers/{id}", [TeacherController::class, "show"])->name("teacher_show");
    Route::delete("/teacher/delete/{id}", [TeacherController::class, "delete"])->name("teacher_delete");
    Route::get("/teacher/{id}/edit", [TeacherController::class, "edit"])->name("teacher_edit");
    Route::put("/teacher/{id}", [TeacherController::class, "update"])->name("teacher_update");
    Route::get('/teacher/search', [TeacherController::class, 'search'])->name('teacher_search');

    Route::get('/staffs', [StaffController::class, 'index'])->name('staffs');
    Route::get("/staff_create", [StaffController::class, "create"])->name("staff_create");
    Route::post("/staff_store", [StaffController::class, "store"])->name("staff_store");
    Route::get("/staffs/{id}", [StaffController::class, "show"])->name("staff_show");
    Route::delete("/staff/delete/{id}", [StaffController::class, "delete"])->name("staff_delete");
    Route::get("/staff/{id}/edit", [StaffController::class, "edit"])->name("staff_edit");
    Route::put("/staff/{id}", [StaffController::class, "update"])->name("staff_update");
    Route::get('/staff/search', [StaffController::class, 'search'])->name('staff_search');

    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get("/student_create", [StudentController::class, "create"])->name("student_create");
    Route::post("/student_store", [StudentController::class, "store"])->name("student_store");
    Route::get("/students/{id}", [StudentController::class, "show"])->name("student_show");
    Route::delete("/student/delete/{id}", [StudentController::class, "delete"])->name("student_delete");
    Route::get("/student/{id}/edit", [StudentController::class, "edit"])->name("student_edit");
    Route::put("/student/{id}", [StudentController::class, "update"])->name("student_update");
    Route::get('/student/search', [StudentController::class, 'search'])->name('student_search');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get("/user_create", [UserController::class, "create"])->name("user_create");
    Route::post("/user_store", [UserController::class, "store"])->name("user_store");
    Route::get("/users/{id}", [UserController::class, "show"])->name("user_show");
    Route::delete("/user/delete/{id}", [UserController::class, "delete"])->name("user_delete");
    Route::get("/user/{id}/edit", [UserController::class, "edit"])->name("user_edit");
    Route::put("/user/{id}", [UserController::class, "update"])->name("user_update");
    Route::get('/user/search', [UserController::class, 'search'])->name('user_search');

    Route::get('/categorie_paths', [Categories_Path_Controller::class, 'index'])->name('categorie_paths');
    Route::get("/categorie_path_create", [Categories_Path_Controller::class, "create"])->name("categorie_path_create");
    Route::post("/categorie_path_store", [Categories_Path_Controller::class, "store"])->name("categorie_path_store");
    Route::get("/categorie_paths_show/{id}", [Categories_Path_Controller::class, "show"])->name("categorie_paths_show");
    Route::delete("/categorie_path/delete/{id}", [Categories_Path_Controller::class, "delete"])->name("categorie_path_delete");
    Route::get("/categorie_path_delete/{id}/edit", [Categories_Path_Controller::class, "edit"])->name("categorie_path_edit");
    Route::put("/categorie-paths/{id}", [Categories_Path_Controller::class, "update"])->name("categorie_path_update");
    Route::get('/categorie_path/search', [Categories_Path_Controller::class, 'search'])->name('categorie_path_search');

    Route::get('/categorie_images', [Categorie_Image_Controller::class, 'index'])->name('categorie_images.index');
    Route::get('/categorie_images/create', [Categorie_Image_Controller::class, 'create'])->name('categorie_images.create');
    Route::post('/categorie_images', [Categorie_Image_Controller::class, 'store'])->name('categorie_images.store');
    Route::get('/categorie_images/{id}', [Categorie_Image_Controller::class, 'show'])->name('categorie_images.show');
    Route::delete('/categorie_images/{id}', [Categorie_Image_Controller::class, 'delete'])->name('categorie_images.delete');
    Route::get('/categorie_images/{id}/edit', [Categorie_Image_Controller::class, 'edit'])->name('categorie_images.edit');
    Route::put('/categorie_images/{id}', [Categorie_Image_Controller::class, 'update'])->name('categorie_images.update');
    Route::get('/categorie_images/search', [Categorie_Image_Controller::class, 'search'])->name('categorie_images.search');


    Route::get("/error", function () {
        return view('page.index_error');
    });
});
