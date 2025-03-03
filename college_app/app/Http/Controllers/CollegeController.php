<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;


class CollegeController extends Controller
{
    public function index(){
        $colleges= College::all();
        return view("colleges.index", compact('colleges'));
    }
     // Create a new College

    public function create(){
        return view('colleges.create');
    }

    public function store(Request $request){
        $request ->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        College::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return redirect()->route('colleges.index')->with('success', 'College created successfully');
    }
    // edit a college

    public function edit($id){
        // Find the College by ID
        $college = College::findOrFail($id);

        return view('colleges.edit', compact('college'));
    }

    //Update a College

    public function update(Request $request, $id){
        
        $request ->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $college = College::findOrFail($id);
        
        $college->update($request->all());

        return redirect()->route('colleges.index')->with('success', 'College was Updated Successfully');

    }
}
