@extends('layouts.main')

@section('content')
<form action="{{ route('students.update',$student->id) }}" method="POST">
  @method('PUT')
  @csrf
  @include('students._form')
</form>
@endsection