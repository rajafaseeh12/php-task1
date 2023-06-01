<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CourseController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rendering pages
Route::get('signup',[AuthenticateController::class, 'signup'])->name('signup')->middleware('guest');
Route::get('/',[AuthenticateController::class, 'home'])->name('/')->middleware('auth');
Route::get('signin',[AuthenticateController::class, 'signin'])->name('signin')->middleware('guest');
Route::get('profile',[ProfileController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('campusList',[CampusController::class, 'list'])->name('campusList')->middleware('auth');
Route::get('courseList',[CourseController::class, 'list'])->name('courseList')->middleware('auth');
Route::get('addCampus', function () {
    return Inertia::render('Campus/Create');
})->middleware('auth');

Route::get('addCourse', function () {
    return Inertia::render('Course/Create');
})->middleware('auth');
//rendering pages

//sending data/request


Route::post('/register-user',[AuthenticateController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[AuthenticateController::class,'loginUser'])->name('login-user');
Route::post('/new-campus',[CampusController::class,'create'])->name('new-campus');
Route::post('/new-course',[CourseController::class,'create'])->name('new-course');

//sending data/request



//logout
Route::get('/logout', [AuthenticateController::class, 'logout']);


