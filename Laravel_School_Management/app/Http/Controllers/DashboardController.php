<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;


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
            Teacher::where('email', $user->email)->delete();
            Admin::where('email', $user->email)->delete();
            return view('StudentDashboard');

        } elseif ($user->role === 'teacher') {
            $teacher = new Teacher();
            $teacher->name = $user->name; // Copy the name field from the users table
            $teacher->email = $user->email; // Copy the email field from the users table
            Student::where('email', $user->email)->delete();
            Admin::where('email', $user->email)->delete();
            $teacher->save(); // Insert the student record into the students table
           

            return view('TeacherDashboard');
        } elseif ($user->role === 'admin') {
            $admin = new Admin();
            $admin->name = $user->name; // Copy the name field from the users table
            $admin->email = $user->email; // Copy the email field from the users table

            $admin->save(); // Insert the student record into the students table
           
            return view('AdminDashboard');

        } else {
            return view('UserDashboard');
        }
    }
}

