<?php

namespace App\Http\Controllers;
use App\Models\User;

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

}
