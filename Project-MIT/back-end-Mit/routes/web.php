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



Route::get("/" , [AuthController::class,"login"])
->name("login");
Route::post("/login", [AuthController::class,"loginPost"])
->name("login.post");
Route::get("/register" , [AuthController::class,"register"])
->name("register");
Route::post("/register", [AuthController::class,"registerPost"])
->name("register.post");
Route::Post("logout", [AuthController::class,"logout"])->name("logout");
Route::middleware("auth")->group(function() {
    Route::get("/lang{lang}", [LanguageController::class , 'switchlang'])->name('lang.switch');

    Route::get('/dashboard', [LanguageController::class, 'index'])->name('dashboard');

    Route::get("/news" , [NewMitController::class, "index"])->name("new");

    Route::get('/alumnis', [AlumniController::class, 'index'])->name('alumnis');
    Route::get("alumni_create" , [AlumniController::class, "create"])->name("alumni_create");
    Route::post("alumni_post", [AlumniController::class, "store"])->name("alumni_store");
    Route::get("/alumnis/{id}", [AlumniController::class, "show"])->name("alumni_show");
    Route::delete("/alumni/delete/{id}", [AlumniController::class, "delete"])->name("alumni_delete");
    Route::get("/alumni/{id}/edit", [AlumniController::class, "edit"])->name("alumni_edit");
    Route::put("/alumni/{id}", [AlumniController::class, "update"])->name("alumni_update");
    Route::get('/alumni/search', [AlumniController::class, 'search'])->name('alumni_search');

    Route::get('/aboutmits', [AboutMitController::class, 'index'])->name('aboutmits');
    Route::get("aboutmit_create" , [AboutMitController::class, "create"])->name("aboutmit_create");
    Route::post("aboutmit_post", [AboutMitController::class, "store"])->name("aboutmit_store");
    Route::get("/aboutmits/{id}", [AboutMitController::class, "show"])->name("aboutmit_show");
    Route::delete("/aboutmit/delete/{id}", [AboutMitController::class, "delete"])->name("aboutmit_delete");
    Route::get("/aboutmit/{id}/edit", [AboutMitController::class, "edit"])->name("aboutmit_edit");
    Route::put("/aboutmit/{id}", [AboutMitController::class, "update"])->name("aboutmit_update");
    Route::get('/aboutmit/search', [AboutMitController::class, 'search'])->name('aboutmit_search');

    Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
    Route::get("categorie_create" , [CategorieController::class, "create"])->name("categorie_create");
    Route::post("categorie_post", [CategorieController::class, "store"])->name("categorie_store");
    Route::get("/categories/{id}", [CategorieController::class, "show"])->name("categorie_show");
    Route::delete("/categorie/delete/{id}", [CategorieController::class, "delete"])->name("categorie_delete");
    Route::get("/categorie/{id}/edit", [CategorieController::class, "edit"])->name("categorie_edit");
    Route::put("/categorie/{id}", [CategorieController::class, "update"])->name("categorie_update");
    Route::get('/categorie/search', [CategorieController::class, 'search'])->name('categorie_search');

    Route::get('/campuslifes', [CampusLifeController::class, 'index'])->name('campuslifes');
    Route::get("/campuslife_create" , [CampusLifeController::class, "create"])->name("campuslife_create");
    Route::post("/campuslife_post", [CampusLifeController::class, "store"])->name("campuslife_store");
    Route::get("/campuslifes/{id}", [CampusLifeController::class, "show"])->name("campuslife_show");
    Route::delete("/campuslife/delete/{id}", [CampusLifeController::class, "delete"])->name("campuslife_delete");
    Route::get("/campuslife/{id}/edit", [CampusLifeController::class, "edit"])->name("campuslife_edit");
    Route::put("/campuslife/{id}", [CampusLifeController::class, "update"])->name("campuslife_update");
    Route::get('/campuslife/search', [CampusLifeController::class, 'search'])->name('campuslife_search');

    Route::get('/educations', [EducationController::class, 'index'])->name('educations');
    Route::get("/education_create" , [EducationController::class, "create"])->name("education_create");
    Route::post("/education_post", [EducationController::class, "store"])->name("education_store");
    Route::get("/educations/{id}", [EducationController::class, "show"])->name("education_show");
    Route::delete("/education/delete/{id}", [EducationController::class, "delete"])->name("education_delete");
    Route::get("/education/{id}/edit", [EducationController::class, "edit"])->name("education_edit");
    Route::put("/education/{id}", [EducationController::class, "update"])->name("education_update");
    Route::get('/education/search', [EducationController::class, 'search'])->name('education_search');

    Route::get('/innovations', [InnovationController::class, 'index'])->name('innovations');
    Route::get("/innovation_create" , [InnovationController::class, "create"])->name("innovation_create");
    Route::post("/innovation_post", [InnovationController::class, "store"])->name("innovation_store");
    Route::get("/innovations/{id}", [InnovationController::class, "show"])->name("innovation_show");
    Route::delete("/innovation/delete/{id}", [InnovationController::class, "delete"])->name("innovation_delete");
    Route::get("/innovation/{id}/edit", [InnovationController::class, "edit"])->name("innovation_edit");
    Route::put("/innovation/{id}", [InnovationController::class, "update"])->name("innovation_update");
    Route::get('/innovation/search', [InnovationController::class, 'search'])->name('innovation_search');

    Route::get('/admissions_aids', [Admissions_AidController::class, 'index'])->name('admissions_aids');
    Route::get("/admissions_aid_create" , [Admissions_AidController::class, "create"])->name("admissions_aid_create");
    Route::post("/admissions_aid_post", [Admissions_AidController::class, "store"])->name("admissions_aid_store");
    Route::get("/admissions_aids/{id}", [Admissions_AidController::class, "show"])->name("admissions_aid_show");
    Route::delete("/admissions_aid/delete/{id}", [Admissions_AidController::class, "delete"])->name("admissions_aid_delete");
    Route::get("/admissions_aid/{id}/edit", [Admissions_AidController::class, "edit"])->name("admissions_aid_edit");
    Route::put("/admissions_aid/{id}", [Admissions_AidController::class, "update"])->name("admissions_aid_update");
    Route::get('/admissions_aid/search', [Admissions_AidController::class, 'search'])->name('admissions_aid_search');

    Route::get('/researchs', [ResearchController::class, 'index'])->name('researchs');
    Route::get("/research_create" , [ResearchController::class, "create"])->name("research_create");
    Route::post("/research_post", [ResearchController::class, "store"])->name("research_store");
    Route::get("/researchs/{id}", [ResearchController::class, "show"])->name("research_show");
    Route::delete("/research/delete/{id}", [ResearchController::class, "delete"])->name("research_delete");
    Route::get("/research/{id}/edit", [ResearchController::class, "edit"])->name("research_edit");
    Route::put("/research/{id}", [ResearchController::class, "update"])->name("research_update");
    Route::get('/research/search', [ResearchController::class, 'search'])->name('research_search');

    Route::get('/newmits', [NewMitController::class, 'index'])->name('newmits');
    Route::get("/newmit_create" , [NewMitController::class, "create"])->name("newmit_create");
    Route::post("/newmit_post", [NewMitController::class, "store"])->name("newmit_store");
    Route::get("/newmits/{id}", [NewMitController::class, "show"])->name("newmit_show");
    Route::delete("/newmit/delete/{id}", [NewMitController::class, "delete"])->name("newmit_delete");
    Route::get("/newmit/{id}/edit", [NewMitController::class, "edit"])->name("newmit_edit");
    Route::put("/newmit/{id}", [NewMitController::class, "update"])->name("newmit_update");
    Route::get('/newmit/search', [NewMitController::class, 'search'])->name('newmit_search');

    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get("/teacher_create" , [TeacherController::class, "create"])->name("teacher_create");
    Route::post("/teacher_post", [TeacherController::class, "store"])->name("teacher_store");
    Route::get("/teachers/{id}", [TeacherController::class, "show"])->name("teacher_show");
    Route::delete("/teacher/delete/{id}", [TeacherController::class, "delete"])->name("teacher_delete");
    Route::get("/teacher/{id}/edit", [TeacherController::class, "edit"])->name("teacher_edit");
    Route::put("/teacher/{id}", [TeacherController::class, "update"])->name("teacher_update");
    Route::get('/teacher/search', [TeacherController::class, 'search'])->name('teacher_search');

    Route::get('/staffs', [StaffController::class, 'index'])->name('staffs');
    Route::get("/staff_create" , [StaffController::class, "create"])->name("staff_create");
    Route::post("/staff_store", [StaffController::class, "store"])->name("staff_store");
    Route::get("/staffs/{id}", [StaffController::class, "show"])->name("staff_show");
    Route::delete("/staff/delete/{id}", [StaffController::class, "delete"])->name("staff_delete");
    Route::get("/staff/{id}/edit", [StaffController::class, "edit"])->name("staff_edit");
    Route::put("/staff/{id}", [StaffController::class, "update"])->name("staff_update");
    Route::get('/staff/search', [StaffController::class, 'search'])->name('staff_search');

    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get("/student_create" , [StudentController::class, "create"])->name("student_create");
    Route::post("/student_store", [StudentController::class, "store"])->name("student_store");
    Route::get("/students/{id}", [StudentController::class, "show"])->name("student_show");
    Route::delete("/student/delete/{id}", [StudentController::class, "delete"])->name("student_delete");
    Route::get("/student/{id}/edit", [StudentController::class, "edit"])->name("student_edit");
    Route::put("/student/{id}", [StudentController::class, "update"])->name("student_update");
    Route::get('/student/search', [StudentController::class, 'search'])->name('student_search');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get("/user_create" , [UserController::class, "create"])->name("user_create");
    Route::post("/user_store", [UserController::class, "store"])->name("user_store");
    Route::get("/users/{id}", [UserController::class, "show"])->name("user_show");
    Route::delete("/user/delete/{id}", [UserController::class, "delete"])->name("user_delete");
    Route::get("/user/{id}/edit", [UserController::class, "edit"])->name("user_edit");
    Route::put("/user/{id}", [UserController::class, "update"])->name("user_update");
    Route::get('/user/search', [UserController::class, 'search'])->name('user_search');

    Route::get('/categorie_paths', [Categories_Path_Controller::class, 'index'])->name('categorie_paths');
    Route::get("/categorie_path_create" , [Categories_Path_Controller::class, "create"])->name("categorie_path_create");
    Route::post("/categorie_path_store", [Categories_Path_Controller::class, "store"])->name("categorie_path_store");
    Route::get("/categorie_paths_show/{id}", [Categories_Path_Controller::class, "show"])->name("categorie_paths_show");
    Route::delete("/categorie_path/delete/{id}", [Categories_Path_Controller::class, "delete"])->name("categorie_path_delete");
    Route::get("/categorie_path_delete/{id}/edit", [Categories_Path_Controller::class, "edit"])->name("categorie_path_edit");
    Route::put("/categorie-paths/{id}", [Categories_Path_Controller::class, "update"])->name("categorie_path_update");
    Route::get('/categorie_path/search', [Categories_Path_Controller::class, 'search'])->name('categorie_path_search');

    Route::get('/categorie_images', [Categorie_Image_Controller::class, 'index'])->name('categorie_images');
    Route::get("/categorie_image_create" , [Categorie_Image_Controller::class, "create"])->name("categorie_image_create");
    Route::post("/categorie_image_store", [Categorie_Image_Controller::class, "store"])->name("categorie_image_store");
    Route::get("/categorie_images_show/{id}", [Categorie_Image_Controller::class, "show"])->name("categorie_images_show");
    Route::delete("/categorie_image/delete/{id}", [Categorie_Image_Controller::class, "delete"])->name("categorie_image_delete");
    Route::get("/categorie_image_delete/{id}/edit", [Categorie_Image_Controller::class, "edit"])->name("categorie_image_edit");
    Route::put("/categorie-images/{id}", [Categorie_Image_Controller::class, "update"])->name("categorie_image_update");
    Route::get('/categorie_image/search', [Categorie_Image_Controller::class, 'search'])->name('categorie_image_search');

     Route::get("/error", function(){
         return view('page.index_error');
     });
});


