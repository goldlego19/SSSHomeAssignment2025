<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // Fetch colleges for the filter dropdown
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');

        $students = Student::query();

        // Apply college filter if a college_id is provided
        if ($request->has('college_id') && $request->college_id != '') {
            $students->where('college_id', $request->college_id);
        }

        // Apply sorting if a sort parameter is provided
        if ($request->has('sort')) {
            $sortField = $request->query('sort');
            if ($sortField === 'name') {
                $students->orderBy('name');
            }
        }

        // Get the filtered and sorted students
        $students = $students->get();

        return view('students.index', compact('students', 'colleges'));
    }

    public function create(){

        //fetch all colleges to populate the dropdown
        $colleges = College::all();
        $student = new Student();
        return view('students.create', compact('colleges','student'));
    }

    public function store(Request $request){

        //Validating Request Body   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|regex:/^\d{8}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        //Creating new Student

        $student = Student::create($request->all());

        //notifing user of creation

        if ($student) {
            return redirect()->route('students.index')->with('success', 'Student created successfully!');
        } else {
            return redirect()->route('students.index')->with('error', 'Failed to create student. Please try again.');
        }
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
            'phone' => 'required|string|regex:/^\d{8}$/',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($id);

        // Update the student record in the database
        $student->update($request->all());

        // Redirect to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
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
