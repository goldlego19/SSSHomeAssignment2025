@extends('layouts.main')

@section('content')
<div class="container-fluid pt-4 pb-4 px-4" style="width: 90%;">
    <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Student Details</h6>
      <!-- First Row: Name and Email -->
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <p class="form-control bg-dark text-white" style="background-color: #000 !important;">{{ $student->name }}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <p class="form-control bg-dark text-white" style="background-color: #000 !important;">{{ $student->email }}</p>
          </div>
        </div>
      </div>

      <!-- Second Row: Phone and Date of Birth -->
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <p class="form-control bg-dark text-white" style="background-color: #000 !important;">{{ $student->phone }}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <p class="form-control bg-dark text-white" style="background-color: #000 !important;">{{ $student->dob }}</p>
          </div>
        </div>
      </div>

      <!-- Third Row: College -->
      <div class="row mb-3">
        <div class="col-md-12">
          <div class="mb-3">
            <label for="college" class="form-label">College</label>
            <p class="form-control bg-dark text-white" style="background-color: #000 !important;">{{ $student->college->name }}</p>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <a href="{{route('students.index')}}" class="btn btn-outline-primary">Back</a>
        </div>
      </div>
    
    </div>

    
  </div>

  

@endsection
