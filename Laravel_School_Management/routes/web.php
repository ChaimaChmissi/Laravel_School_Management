<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/Courses', [DashboardController::class, 'dashboard'])->name('dashboard');
});
require __DIR__.'/auth.php';


Route::get('/students', [StudentController::class, 'index']);

