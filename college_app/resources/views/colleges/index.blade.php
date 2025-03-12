@extends('layouts.main')

@section('content')
<div class="container-fluid pt-4 pb-4 px-4" style="width: 90%">
    <div class="row g-4">
        <div class="bg-secondary rounded h-100 p-4">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0">Colleges Table</h6>
            <a href="{{route('colleges.create')}}" type="button" class="btn btn-primary">Add College</a>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col"></th>
                <!-- Align header to the right -->
              </tr>
            </thead>
            <tbody>
              @if ($message = session('message'))
                      <div class="alert alert-success">{{ $message }}</div>
                    @endif 
                    @if ($colleges->count())
                      @foreach ($colleges as $index => $college)
                      <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{$college -> name}}</td>
                        <td>{{$college -> address}}</td>
                        <td class="text-end">
                          <!-- Align content to the right -->
                          <a href="{{ route('colleges.show', $college->id) }}" type="button" class="btn btn-primary">
                            <i class="bi bi-eye-fill"></i>
                          </a>
                          <a href="{{ route('colleges.edit', $college->id) }}" type="button" class="btn btn-success edit-btn">
                            <i class="bi bi-pencil-fill"></i>
                            <span class="edit-text">&nbsp;&nbsp;Edit</span>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
            </tbody>
          </table>
        </div>
  </div>
  
</div>

@endsection