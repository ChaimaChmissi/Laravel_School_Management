<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;


class SubjectController extends Controller
{
    public function index()
    {
        // Get a list of all students from the database
      /*  $students = Student::all();

        // Pass the list of students to the view
        return view('students.index', ['students' => $students]);
*/
   $subjects =Subject::get();
return view('subjects-list', ['subjects' => $subjects]);


    }

    public function editSubject($id)
    {

      $subject =Subject::where('id','=',$id)->first();
       return view('edit-subject', compact('subject'));


    }

    public function updateSubject(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255' . $id
    ]);

    $name = $request->name;

    $subject = Subject::find($id);
    $subject->name = $name;
    $subject->save();

    return redirect()->back()->with('success', 'Subject updated successfully');
}


public function deleteSubject($id)
{
  
    

    $subject = Subject::find($id);
   
    $subject->delete();

    return redirect()->back()->with('success', 'Subject deleted successfully');
}
public function addSubject()
{
    $subject = new Subject(); // or fetch subject data from the database
    return view('add-subject', compact('subject'));
}

public function saveSubject(Request $request)
{
   $name = $request->input('name');

   $newSubject = new Subject();
   $newSubject->name = $name;
   $newSubject->save();

   return redirect()->back()->with('success', 'Subject Added successfully');
}


}
