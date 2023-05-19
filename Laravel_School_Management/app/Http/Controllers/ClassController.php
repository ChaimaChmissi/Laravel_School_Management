<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classe;
use App\Models\Student;



class ClassController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
      /*  $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
*/
   $classes =Classe::get();
return view('classes-list', ['classes' => $classes]);


    }


    public function editClass($id)
    {

      $class =Classe::where('id','=',$id)->first();
       return view('edit-class', compact('class'));


    }


    public function updateClass(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255' ,
            'description' => 'required|string|max:255' 
            .$id

        ]);
    
        $name = $request->name;
        $description = $request->description;

        $class = Classe::find($id);
        $class->name = $name;
        $class->description = $description;
        $class->save();
    
        return redirect()->back()->with('success', 'Class updated successfully');
    }
    

    public function deleteClass($id)
    {
      
        
    
        $class = Classe::find($id);
       
        $class->delete();
    
        return redirect()->back()->with('success', 'Class deleted successfully');
    }  


    public function addClass()
    {
        $class = new Classe();
        return view('add-class', compact('class'));
    }
    
    public function saveClass(Request $request)
    {
       $name = $request->input('name');
       $description = $request->input('description');
       $newClass = new Classe();
       $newClass->name = $name;
       $newClass->description = $description;
       $newClass->save();
    
       return redirect()->back()->with('success', 'Class Added successfully');
    }

    

    //Assign Students to class

public function assignStudents()
{
    $students = Student::all();
    $classes = Classe::all();

    return view('assign-class', compact('students', 'classes'));
}
    
public function storeStudent(Request $request)
{
    $studentIds = $request->input('student_id');
    $classIds = $request->input('class_id');

    foreach ($studentIds as $key => $studentId) {
        $student = Student::findOrFail($studentId);
        $student->class_id = $classIds[$key];
        $student->save();
    }

    return redirect()->back()->with('success', 'Students assigned successfully.');
}
 
    
    



}