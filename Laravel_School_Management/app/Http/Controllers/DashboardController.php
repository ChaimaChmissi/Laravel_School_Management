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
        $student = Student::where('email', $user->email)->first();
        $teacher = Teacher::where('email', $user->email)->first();
        $admin = Admin::where('email', $user->email)->first();
    
        
    
        if ($user->role === 'student') {
            $student = new Student();
            $student->name = $user->name; // Copy the name field from the users table
            $student->email = $user->email; // Copy the email field from the users table
    
            $student->save(); // Insert the student record into the students table
            Teacher::where('email', $user->email)->delete();
            Admin::where('email', $user->email)->delete();
            return view('StudentDashboard');
        }
    
        if ($user->role === 'teacher') {
            $teacher = new Teacher();
            $teacher->name = $user->name; // Copy the name field from the users table
            $teacher->email = $user->email; // Copy the email field from the users table
    
            $teacher->save(); // Insert the teacher record into the teachers table
            Student::where('email', $user->email)->delete();
            Admin::where('email', $user->email)->delete();
            return view('TeacherDashboard');
        }
    
        if ($user->role === 'admin') {
            $admin = new Admin();
            $admin->name = $user->name; // Copy the name field from the users table
            $admin->email = $user->email; // Copy the email field from the users table
    
            $admin->save(); // Insert the admin record into the admins table
            Student::where('email', $user->email)->delete();
            Teacher::where('email', $user->email)->delete();
            return view('AdminDashboard');
        }
    
        return view('UserDashboard');
    }
    
}

