<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Courses', function () {
    return view('Courses');
});



Route::get('/profile', function () {
    return view('profile');
});


Route::get('/StudentDashboard', function () {
    return view('StudentDashboard');
});

Route::get('/TeacherDashboard', function () {
    return view('TeacherDashboard');
});


Route::get('/students-list', function () {
    return view('students-list');
});

Route::get('/Courses', function () {
    return view('Courses');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/Courses', [DashboardController::class, 'dashboard'])->name('dashboard');
});
require __DIR__.'/auth.php';


Route::get('/students-list', [StudentController::class, 'index'])->name('students-list');

Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('/update-student/{id}', [StudentController::class, 'updateStudent']);

Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('/users-list', function () {
    return view('users-list');
});

Route::get('/users-list', [UserController::class, 'index'])->name('users-list');


//Teacher
Route::get('/teachers-list', [TeacherController::class, 'index'])->name('teachers-list');

Route::get('/edit-teacher/{id}', [TeacherController::class, 'editTeacher']);
Route::post('/update-teacher/{id}', [TeacherController::class, 'updateTeacher']);

Route::get('/delete-teacher/{id}', [TeacherController::class, 'deleteTeacher']);


//Subjects



Route::get('/subjects-list', [SubjectController::class, 'index'])->name('subjects-list');

Route::get('/edit-subject/{id}', [SubjectController::class, 'editSubject']);
Route::post('/update-subject/{id}', [SubjectController::class, 'updateSubject']);

Route::get('/delete-subject/{id}', [SubjectController::class, 'deleteSubject']);

Route::get('/add-subject', [SubjectController::class, 'addSubject']);

Route::post('/save-subject', [SubjectController::class, 'saveSubject']);


//classes

Route::get('/classes-list', [ClassController::class, 'index'])->name('classes-list');
Route::get('/edit-class/{id}', [ClassController::class, 'editClass']);
Route::post('/update-class/{id}', [ClassController::class, 'updateClass']);
Route::get('/delete-class/{id}', [ClassController::class, 'deleteClass']);

Route::get('/add-class', [ClassController::class, 'addClass']);

Route::post('/save-class', [ClassController::class, 'saveClass']);






//Users
Route::post('/add-student/{id}', [UserController::class, 'addStudent']);
Route::post('/add-teacher/{id}', [UserController::class, 'addTeacher']);

//Profile 
Route::get('/profile', [App\Http\Controllers\UserController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile.update');


// Assign Class to Student
Route::get('/assign-class', [ClassController::class, 'assignStudents'])->name('assignClass');

// Assign students to class page
Route::get('/assign-students', [ClassController::class, 'assignStudents'])->name('assignStudents');

// Store assigned student
Route::post('/store-student', [ClassController::class, 'storeStudent'])->name('storeStudent');


//Courses Upload
Route::get('upload-courses', [CourseController::class, 'create'])->name('courses.create');
Route::post('upload-courses', [CourseController::class, 'store'])->name('courses.store');

