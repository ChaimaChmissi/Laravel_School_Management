<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
      /*  $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
        
*/

   $students =Student::get();
return view('students-list', ['students' => $students]);


    }

    public function editStudent($id)
    {

      $student =Student::where('id','=',$id)->first();
       return view('edit-student', compact('student'));


    }

    public function updateStudent(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:students,email,' . $id
    ]);

    $name = $request->name;
    $email = $request->email;

    $student = Student::find($id);
    $student->name = $name;
    $student->email = $email;
    $student->save();

    return redirect()->back()->with('success', 'Student updated successfully');
}


public function deleteStudent($id)
{
  
    

    $student = Student::find($id);
   
    $student->delete();

    return redirect()->back()->with('success', 'Student deleted successfully');
}



}
