<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Extracurricular;
use App\Models\Student;
use App\Models\Teacher;
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



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('/contact', 'contact', ['name' => 'Muhammad Ariq Hendry']);

Route::redirect('/contact', '/contactme');

Route::get('/product/{id}', function ($id) {
    return 'ini adalah product dengan id ' . $id;
});

Route::prefix('administrator')->group(function () {
    Route::get('/profil-admin', function () {
        return 'profil admin';
    });
    Route::get('/about-admin', function () {
        return 'about admin';
    });
    Route::get('/contact-admin', function () {
        return 'contact admin';
    });
});

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');




Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');

Route::middleware(['auth', 'must-admin-or-teacher'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/student/{id}', [StudentController::class, 'show']);
    Route::get('/student-add', [StudentController::class, 'create']);
    Route::post('/student', [StudentController::class, 'store']);
    Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
    Route::put('/student/{id}', [StudentController::class, 'update']);
});

Route::middleware(['auth', 'must-admin'])->group(function () {
    Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
    Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
    Route::get('/student-deleted', [StudentController::class, 'deletedStudent']);
    Route::get('/student/{id}/restore', [StudentController::class, 'restore']);
});


Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-add', [ClassController::class, 'create']);
Route::post('/class', [ClassController::class, 'store']);
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular', [ExtracurricularController::class, 'store']);
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teacher', [TeacherController::class, 'store']);
Route::get('/teacher/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-deleted', [TeacherController::class, 'deletedTeacher']);
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy']);
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete']);
// Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);
