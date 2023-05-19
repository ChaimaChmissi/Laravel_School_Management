<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\Authenticatable;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
      /*  $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
*/
   $users =User::get();
return view('users-list', ['users' => $users]);


    }
    public function addStudent($id)
    {
        $user = User::find($id);
    
        // Check if student with the same email already exists
        if (Student::where('email', $user->email)->exists()) {
            return redirect()->back()->with('error', 'Student already exists!');
        }
    
        $student = new Student;
        $student->name = $user->name;
        $student->email = $user->email;
        $student->save();
        
        return redirect()->back()->with('success', 'Student added successfully!');
    }
    
    public function addTeacher($id)
    {
        $user = User::find($id);
    
        if (Teacher::where('email', $user->email)->exists()) {
            return redirect()->back()->with('error', 'Teacher already exists!');
        }
    
        $teacher = new Teacher;
        $teacher->name = $user->name;
        $teacher->email = $user->email;
        $teacher->save();
        
        return redirect()->back()->with('success', 'Teacher added successfully!');
    }
    
    public function editProfile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
    
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
    

  }




