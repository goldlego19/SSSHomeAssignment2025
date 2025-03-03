
@extends('layouts.main')

@section('content')
<form action="{{ route('colleges.update',$college->id) }}" method="POST">
    @method('PUT')
    @csrf
    @include('colleges._form')
  </form>
@endsection
