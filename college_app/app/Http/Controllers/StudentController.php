<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    public function create(){

        //fetch all colleges to populate the dropdown
        $colleges = College::all();

        return view('students.create', compact('colleges'));
    }

    public function store(Request $request){

        //Validating Request Body   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        //Creating new Student

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'college_id' => $request->college_id,
        ]);

        //notifing user of creation

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function edit($id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);

        // Fetch all colleges to populate a dropdown in the form
        $colleges = College::all();

        // Return the view for editing the student
        return view('students.edit', compact('student', 'colleges'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($id);

        // Update the student record in the database
        $student->update($request->all());

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);

        // Delete the student record from the database
        $student->delete();

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
