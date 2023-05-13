<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
      /*  $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
*/
   $teachers =Teacher::get();
return view('teachers-list', ['teachers' => $teachers]);


    }

    public function editTeacher($id)
    {

      $teacher =Teacher::where('id','=',$id)->first();
       return view('edit-teacher', compact('teacher'));


    }

    public function updateTeacher(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:teachers,email,' . $id
    ]);

    $name = $request->name;
    $email = $request->email;

    $teacher = Teacher::find($id);
    $teacher->name = $name;
    $teacher->email = $email;
    $teacher->save();

    return redirect()->back()->with('success', 'Teacher updated successfully');
}


public function deleteTeacher($id)
{
  
    

    $teacher = Teacher::find($id);
   
    $teacher->delete();

    return redirect()->back()->with('success', 'Teacher deleted successfully');
}
}
