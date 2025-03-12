@extends('layouts.main')

@section('content')
<div class="container-fluid pt-4 px-4" style="width: 90%">
  
  <div class="bg-secondary rounded h-100 p-4 mb-4">
    @include('students._filter')
  </div>
  <div class="bg-secondary rounded h-100 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h6 class="mb-0">Students Hoverable Table</h6>
      <div class="d-flex align-items-center">
      @include('students._sort')
      <a href="{{ route('students.create') }}" type="button" class="btn btn-primary" style="margin-left: 0.5rem;">Add Student</a></div>
    </div>

    <!-- Display Success or Error Messages -->
    @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger" role="alert">
        {{ session('error') }}
      </div>
    @endif

    <!-- Check if Students Exist -->
    @if ($students->count())
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">College</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $index => $student)
            <tr>
              <th scope="row">{{ $index + 1 }}</th>
              <td>{{ $student->name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->dob }}</td>
              <td>{{ $student->college->name }}</td>
              <td class="text-end">
                <a class="btn btn-sm btn-circle btn-primary mx-2" href="{{ route('students.show', $student->id) }}">
                  <i class="bi bi-eye-fill"></i>
                </a>
                <a class="btn btn-sm btn-circle btn-danger mx-2 btn-delete" href="{{ route('students.destroy', $student->id) }}">
                  <i class="bi bi-trash-fill"></i>
                </a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-circle btn-success mx-2">
                  <i class="bi bi-pencil-fill"></i>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Delete Form -->
      <form id="form-delete" method="POST" style="display:none">
        @method('DELETE')
        @csrf
      </form>
    @else
      <div class="alert alert-info" role="alert">
        No students found.
      </div>
    @endif
  </div>
</div>
@endsection