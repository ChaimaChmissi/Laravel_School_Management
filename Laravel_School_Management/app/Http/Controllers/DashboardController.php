<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        if ($user->role === 'student') {
            $student = new Student();
            $student->name = $user->name; // Copy the name field from the users table
            $student->email = $user->email; // Copy the email field from the users table

            $student->save(); // Insert the student record into the students table
           
            return view('StudentDashboard');

        } elseif ($user->role === 'teacher') {
            return view('TeacherDashboard');
        } elseif ($user->role === 'admin') {
            return view('AdminDashboard');
        } else {
            return view('UserDashboard');
        }
    }
}

