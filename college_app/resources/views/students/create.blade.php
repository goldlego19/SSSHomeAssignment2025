@extends('layouts.main')

@section('content')
                <form action="{{ route('students.store') }}" method="POST">
                  @csrf
                  @include('students._form')
                </form>
@endsection