<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('upload-courses');
    }
    

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Store the file
        $file = $request->file('file');
        $filePath = $file->store('public/files');

        // Create the course record
        $course = new Course();
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->file_path = $filePath;
        $course->teacher_id = auth()->user()->id; // Assuming you have authentication set up
        $course->save();

        return redirect()->back()->with('success', 'Course uploaded successfully.');
    }


   
}
