<?php


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
        $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
    }
}
